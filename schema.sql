create table "todos" (
	id SERIAL primary key,
	todo varchar not null,
	status boolean not null default false
);
