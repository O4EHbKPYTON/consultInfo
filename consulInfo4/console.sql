select u.id as userId,u.firstName,u.lastName,c.id as cityId,c.city
from user u
left join  city c on u.city = c.id;