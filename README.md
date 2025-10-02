# Social-Pique

## [Social-Pique Alpha Site](https://alpha.social-pique.com/)

### Enjoy real-time competitive multiplayer gaming.

### A personal experiment that grew out of my frustration with another project.

# Technology Stack

1. Nginx
2. PHP
3. Postgres
4. Erlang/Cowboy
5. Vue.js
6. FreeBSD

## Thoughts

I'm purposefully doing the 'wrong thing' by making Postgres the logical back-end of it all; Erlang is only present to handle socket-based communication; both Erlang and PHP communicate with Postgres. Speaking of Postgres, I've taken to treating the database as another API.

This means, quite literally, that every call in SQL from PHP/Erlang/Ruby/etc. looks like `SELECT custom_function(arg1, ...);` This has the bonus side-effect of locking-down the database from the app-user. Because the app-user doesn't need GRANT access to any database objects. :)

I recognize this makes Postgres the bottleneck. My goal is to push Postgres to its limits, and then learn enough to know how to push Postgres beyond those limits.

