select user.firstName,user.lastName,c.city from user
left join city c on user.city = c.id;