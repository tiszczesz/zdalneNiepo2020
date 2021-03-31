use sakila;
select actor.first_name,actor.last_name ,film_actor.film_id,film.title
    from actor 
    inner join film_actor on actor.actor_id = film_actor.actor_id
    inner join film on film_actor.film_id=film.film_id;

select actor.first_name,actor.last_name 
    , actor.actor_id,count(film_actor.film_id)
    from actor 
    inner join film_actor on actor.actor_id = film_actor.actor_id
GROUP BY actor.actor_id order by actor.actor_id;

select count(*)
--film_id ,actor_id 
from film_actor where actor_id=2;

