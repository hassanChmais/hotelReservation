select f.food_drink_name , fd.`quantity`  , res.room_id
from reservation as res , food_drink_resrvation as  fd , food_drink as f
where res.reservation_id= fd.`resrvation_id` and f.food_drink_id=fd.`food_drink_id`
..................................................................
SELECT b.bathes_name ,r.room_id
from reservation as r , bathes_resrvation as bathr , bathes as b
where
r.reservation_id= bathr.resrvation_id and bathr.bathes_id=b.bathes_id
..................................................................
SELECT s.extra_services_name ,r.room_id
from reservation as r , extra_services_resrvation as exr , extra_services as s
where
r.reservation_id= exr.resrvation_id and exr.extra_services_resrvations_id=s.extra_services_resrvations_id
...................................................................
SELECT m.maintenance_name ,r.room_id
from reservation as r , maintenance_resrvation as mr , maintenance as m
where
r.reservation_id= mr.resrvation_id and mr.maintenance_id=m.maintenance_id