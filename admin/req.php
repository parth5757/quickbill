
user
- id,name,email,dob,pass,add,gender,contact,profile_pic,area_id,type,is_verified,lic_id

equipment_master
- eq_id,name,detail,price,time_duration,user_id,verified,subcat_id,

category
- id,name,eq_id

subcategory
- id,name,eq_id

rent_master
- id,deposit,eq_id,u_id,eq_sc_id

license_master
- id,regitser_date,renew_date,expire_date,verify_date

equipment_image_master 
- id,name,eq_id

area_master 
- id,name,pincode,city_id

city_master  
- id,name,