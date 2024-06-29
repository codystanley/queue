CREATE TABLE Tickets (
    ticket_id serial primary key,
    practice text not null,
    doctor text not null,
    pt_last_name text not null,
    pt_first_name text not null,
    pt_dob date not null,
    pt_state text not null,
    caller_phone text not null,
    ticket_created timestamp not null default now(),
    ticket_updated timestamp not null default now()
);
