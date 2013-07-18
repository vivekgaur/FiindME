SELECT * FROM `tbl_deal` WHERE `merchant_id_fk` IN 
(SELECT `merchant_id` FROM `tbl_merchant` WHERE `contact_id_fk` IN 
(SELECT  `contact_id` FROM `tbl_contact` WHERE `address_id_fk` IN
(SELECT  `address_id` FROM `tbl_address` WHERE `zip_code_id_fk` IN 
(SELECT `zipcode_id` FROM `tbl_zipcode` WHERE `zip_code` = 94568

)
)
)
)