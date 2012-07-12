<?php	
    if(!defined('BASEPATH')) exit('No direct script access allowed');
	/**
	 * HTML替换处理类，考虑如下几种替换
	 * 1. img src   : '/<img(.+?)src=([\'\" ])?(.+?)([ >]+?)/i'
	 * 2. a href    : '/<a(.+?)href=([\'\" ])?(.+?)([ >]+?)/i'
	 * 3. ifram.src : '/<iframe(.+?)src=([\'\" ])?(.+?)([ >]+?)/i'
	 * 4. frame src : '/<frame(.+?)src=([\'\" ])?(.+?)([ >]+?)/i'
	 * 5. js        : '/window.open([( ]+?)([\'" ]+?)(.+?)([ )+?])/i'
	 * 6. css       : '/background(.+?)url([( ])([\'" ]+?)(.+?)([ )+?])/i'
	 */
	class Myreplace {
		private $moudle_array = array('udata','tdata','tresult','dresult');
		private $content;
		private $relative_dirname;
		private $projectid;
		private $moudle;
		function __construct() {
			$this->CI = &get_instance ();
		}
		
		/**
		 * 替换
		 * @param 	string 	$content	HTML内容
		 * @param 	string 	$relative	相对路径
		 * @param 	int	 	$projectid	项目id
		 * @moudle	string	$moudle		模板标识: udata,tdata,tresult,dresult
		 */
		public function my_replace($content,$relative,$projectid,$moudle) {
			$this->content = $content;
			$this->relative_dirname = $relative;
			$this->projectid = $projectid;
			if(in_array(strtolower($moudle),$this->moudle_array))
				$this->moudle = $moudle;
			else exit;
			switch($this->moudle) {
				case 'udata':
					$this->CI->load->model('mupload_data','model');
					break;
				case 'tdata':
					$this->CI->load->model('taskdata','model');
					break;
				case 'tresult':
					$this->CI->load->model('taskresult','model');
					break;
				case 'dresult':
					$this->CI->load->model('dmsresult','model');
					break;
				default:
					break;
			}
				
			$pattern = '/<img(.+?)src=([\'\" ])?(.+?)([ >]+?)/i';
			$content = preg_replace_callback( $pattern, array($this, 'image_replace') , $content );
			$pattern = '/<a(.+?)href=([\'\" ])?(.+?)([ >]+?)/i';
			$content = preg_replace_callback( $pattern, array($this, 'html_replace') , $content );
			$pattern = '/<iframe(.+?)src=([\'\" ])?(.+?)([ >]+?)/i';
			$content = preg_replace_callback( $pattern, array($this, 'iframe_replace') , $content );
			$pattern = '/<frame(.+?)src=([\'\" ])?(.+?)([ >]+?)/i'; 
			$content = preg_replace_callback( $pattern, array($this, 'frame_replace'), $content );
			$pattern = '/window.open([( ]+?)([\'" ]+?)(.+?)([ )]+?)/i';
			$content = preg_replace_callback( $pattern, array($this, 'js_replace'), $content );
			$pattern = '/background(.+?)url([( ])([\'" ]+?)(.+?)([ )+?])/i';
			$content = preg_replace_callback( $pattern, array($this, 'css_replace'), $content);
			return $content;
		}
				
		private function image_replace($matches) {
			if(count($matches) < 4) return '';
			if( empty($matches[3]) ) return '';
			$matches[3] = rtrim($matches[3],'\'"/');
			//获取图片的id
			$parent_dir_num = substr_count( $matches[3], '../');
			$relative_dirname = $this->relative_dirname;
			for($i=0; $i<$parent_dir_num; $i++) {
				$relative_dirname = substr( $relative_dirname, 0, strrpos($relative_dirname,"/") );
			}
			$relativepath = rtrim($relative_dirname,'/') . '/'.ltrim($matches[3],'./');
			$image_id = $this->CI->model->get_id_by_path_and_project($relativepath,$this->projectid);
			//输出
			if( !empty($image_id) ) {
				if($this->moudle == 'dresult') {
					return "<img".$matches[1]."src=".$matches[2].$this->CI->config->item("base_url")."cdms/".$this->moudle."/readpic/$image_id?pid=".$this->projectid .$matches[2]. $matches[4];
				} else {
					return "<img".$matches[1]."src=".$matches[2].$this->CI->config->item("base_url")."cdms/".$this->moudle."/picfile/$image_id?pid=".$this->projectid .$matches[2]. $matches[4];
				}
			} else {
				return "<img".$matches[1]."src=".$matches[2].$matches[3].$matches[2].$matches[4];
			}
		}
		
		private function html_replace( $matches ) {
			if(count($matches) < 4) return '';
			if( empty($matches[3]) ) return '';
			//如果href的链接($matches[3])以http或www或mailto开始，则不进行处理
			//if(preg_match('/^[http|www|mailto](.+?)/i',$matches[3])) 
			//	return "<a".$matches[1]."href=".$matches[2].$matches[3].$matches[4];
			$matches[3] = rtrim($matches[3],'\'"/');
			//处理锚点
			if(substr_count($matches[3],'#')>0) 
				$matches[3] = substr($matches[3],0,strrpos($matches[3],'#'));			
			//获取html的id
			$parent_dir_num = substr_count( $matches[3], '../');
			$relative_dirname = $this->relative_dirname;
			for($i=0; $i<$parent_dir_num; $i++) {
				$relative_dirname = substr( $relative_dirname, 0, strrpos($relative_dirname,"/") );
			}
			$relativepath = rtrim($relative_dirname,'/') . '/'.ltrim($matches[3],'./');
			$txtfile_id = $this->CI->model->get_id_by_path_and_project($relativepath,$this->projectid);
			//输出
			if( !empty($txtfile_id ) ) {
				if($this->moudle == 'dresult') {
					return "<a".$matches[1]."href=".$matches[2].$this->CI->config->item("base_url")."cdms/".$this->moudle."/readfile/$txtfile_id?pid=".$this->projectid .$matches[2].$matches[4];
				} else {
					return "<a".$matches[1]."href=".$matches[2].$this->CI->config->item("base_url")."cdms/".$this->moudle."/txtfile/$txtfile_id?pid=".$this->projectid .$matches[2].$matches[4];
				}
			} else {
				return "<a".$matches[1]."href=".$matches[2].$matches[3].$matches[2].$matches[4];
			}
		}
		
		private function iframe_replace( $matches ) {
			if(count($matches) < 4) return '';
			if( empty($matches[3]) ) return '';
			$matches[3] = rtrim($matches[3],'\'"/');
			
			//处理锚点
			if(substr_count($matches[3],'#')>0) 
				$matches[3] = substr($matches[3],0,strrpos($matches[3],'#'));
			//获取html的id
			$parent_dir_num = substr_count( $matches[3], '../');
			$relative_dirname = $this->relative_dirname;
			for($i=0; $i<$parent_dir_num; $i++) {
				$relative_dirname = substr( $relative_dirname, 0, strrpos($relative_dirname,"/") );
			}
			$relativepath = rtrim($relative_dirname,'/') . '/'.ltrim($matches[3],'./');
			$txtfile_id = $this->CI->model->get_id_by_path_and_project($relativepath,$this->projectid);
			//输出
			if( !empty($txtfile_id ) ) {
				if($this->moudle == 'dresult') {		
					return "<iframe".$matches[1]."src=".$matches[2].$this->CI->config->item("base_url")."cdms/".$this->moudle."/readfile/$txtfile_id?pid=".$this->projectid .$matches[2].$matches[4];
				} else {
					return "<iframe".$matches[1]."src=".$matches[2].$this->CI->config->item("base_url")."cdms/".$this->moudle."/txtfile/$txtfile_id?pid=".$this->projectid .$matches[2].$matches[4];
				}
			} else {
				return "<iframe".$matches[1]."src=".$matches[2].$matches[3].$matches[2].$matches[4];
			}
		}
		
		private function frame_replace( $matches ) {			
			if(count($matches) < 4) return '';
			if( empty($matches[3]) ) return '';
			$matches[3] = rtrim($matches[3],'\'"/');
			//处理锚点
			if(substr_count($matches[3],'#')>0) 
				$matches[3] = substr($matches[3],0,strrpos($matches[3],'#'));
			//获取html的id
			$parent_dir_num = substr_count( $matches[3], '../');
			$relative_dirname = $this->relative_dirname;
			for($i=0; $i<$parent_dir_num; $i++) {
				$relative_dirname = substr( $relative_dirname, 0, strrpos($relative_dirname,"/") );
			}
			$relativepath = rtrim($relative_dirname,'/') . '/'.ltrim($matches[3],'./');
			$txtfile_id = $this->CI->model->get_id_by_path_and_project($relativepath,$this->projectid);
			//输出
			if( !empty($txtfile_id ) ) {
				if($this->moudle == 'dresult') {	
					return "<frame".$matches[1]."src=".$matches[2].$this->CI->config->item("base_url")."cdms/".$this->moudle."/readfile/$txtfile_id?pid=".$this->projectid.$matches[2].$matches[4];
				} else {
					return "<frame".$matches[1]."src=".$matches[2].$this->CI->config->item("base_url")."cdms/".$this->moudle."/txtfile/$txtfile_id?pid=".$this->projectid.$matches[2].$matches[4];
				}
			} else {
				return "<frame".$matches[1]."src=".$matches[2].$matches[3].$matches[2].$matches[4];
			}
		}
		
		private function js_replace( $matches ){
			if(count($matches) < 4) return '';
			if( empty($matches[3]) ) return '';
			//处理链接
			$arr_html = split(',',$matches[3]);
			$href = $arr_html[0];
			$other = '';
			for($i=0; $i<count($arr_html); $i++)
				$other = $arr_html[$i].", ";
			$other = rtrim($other,"\, ");
			$href =rtrim($href,'\'\"');
			//处理锚点
			if(substr_count($href,'#')>0) 
				return "window.open".$matches[1].$matches[2].$matches[3].$matches[4];;
			//获取html的id
			$parent_dir_num = substr_count( $href, '../');
			$relative_dirname = $this->relative_dirname;
			for($i=0; $i<$parent_dir_num; $i++) {
				$relative_dirname = substr( $relative_dirname, 0, strrpos($relative_dirname,"/") );
			}
			$relativepath = rtrim($relative_dirname,'/') . '/'.ltrim($href,'./');
			$txtfile_id = $this->CI->model->get_id_by_path_and_project($relativepath,$this->projectid);
			//输出
			if( !empty($txtfile_id ) ) {
				if($this->moudle == 'dresult') {	
					return "window.open".$matches[1].$matches[2].$this->CI->config->item("base_url")."cdms/".$this->moudle."/readfile/$txtfile_id?pid=".$this->projectid.$matches[2].','.$other.$matches[4];
				} else {
					return "window.open".$matches[1].$matches[2].$this->CI->config->item("base_url")."cdms/".$this->moudle."/txtfile/$txtfile_id?pid=".$this->projectid.$matches[2].','.$other.$matches[4];
				}
			} else {
				return "window.open".$matches[1].$matches[2].$matches[3].$matches[4];
			}
		}
		
		private function css_replace( $matches ) {
			if(count($matches) < 5) return '';
			if( empty($matches[4]) ) return '';
			
			$matches[4] = rtrim($matches[4],'\'"/');
			//获取图片的id
			$parent_dir_num = substr_count( $matches[4], '../');
			$relative_dirname = $this->relative_dirname;
			for($i=0; $i<$parent_dir_num; $i++) {
				$relative_dirname = substr( $relative_dirname, 0, strrpos($relative_dirname,"/") );
			}
			$relativepath = rtrim($relative_dirname,'/') . '/'.ltrim($matches[4],'./');
			$image_id = $this->CI->model->get_id_by_path_and_project($relativepath,$this->projectid);
			//输出
			if( !empty($image_id) ) {
				if($this->moudle == 'dresult') {
					return "background".$matches[1]."url".$matches[2].$matches[3].$this->CI->config->item("base_url")."cdms/".$this->moudle."/readpic/$image_id?pid=".$this->projectid .$matches[3]. $matches[5];
				} else {
					return "background".$matches[1]."url".$matches[2].$matches[3].$this->CI->config->item("base_url")."cdms/".$this->moudle."/picfile/$image_id?pid=".$this->projectid .$matches[3]. $matches[5];
				}
			} else {
				return "background".$matches[1]."url".$matches[2].$matches[3].$matches[4].$matches[3].$matches[5];
			}
		}
	}

/* End of Myreplace.php */
/* Location: /application/libraries/Myreplace.php */
?>
