<?php

$handle = kadm5_init_with_password("afs-1", "GONICUS.LOCAL", "admin/admin", "password");

$attributes = KRB5_KDB_REQUIRES_PRE_AUTH | KRB5_KDB_DISALLOW_PROXIABLE;
$options = array(KADM5_PRINC_EXPIRE_TIME => 0,
                 KADM5_POLICY => "default",
                 KADM5_ATTRIBUTES => $attributes);

kadm5_create_principal($handle, "burbach@GONICUS.LOCAL", "password", $options);

kadm5_destroy($handle);



?>