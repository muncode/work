select email, count(*)
from users
group by email
having count(*) > 1;

select login
from users
  left join orders
    on users.id = orders.user_id
where orders.user_id is null;

select login, count(*)
from users
  left join orders
    on users.id = orders.user_id
group by login
having count(*) > 2;