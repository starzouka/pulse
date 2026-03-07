# PULSE – E-Sport Tournament Management Platform

## Overview
This project was developed as part of the PIDEV program at **Esprit School of Engineering – Tunisia**
(Academic Year 2025–2026).  
PULSE is a web platform for managing e-sport tournaments: users, teams, tournaments, matches, shop & orders,
messaging and social features.

## Features
- Public browsing (Visitor): games, categories, tournaments, matches, teams, shop products
- Authentication: register / login / logout + roles (PLAYER / ORGANIZER / ADMIN)
- Organizer workflow: tournament request → admin validation → tournament management
- Teams: join requests, invites, roster management, captain management
- Tournaments: registrations, matches, results, standings (optional)
- Shop: products sold by teams, cart, orders, order statuses
- Social: posts, likes, comments, messaging, notifications, reporting

## Tech Stack
### Frontend
- Twig (Front Office + Back Office templates)
- Bootstrap / Template UI

### Backend
- Symfony 6.4
- PHP 8.x
- Doctrine ORM + Migrations
- MySQL

## Architecture
- Controllers:
  - `src/Controller/Front`
  - `src/Controller/Admin`
  - `src/Controller/Security`
- Templates:
  - `templates/front`
  - `templates/admin`
  - `templates/security`
- Database:
  - Doctrine entities mapped to database tables (migrations versioned)

## Contributors
- Member 1 – User / Social (users, friends, posts, comments, likes, messages, notifications, reports)
- Member 2 – Games / Categories
- Member 3 – Tournaments / Matches (requests, tournaments, registrations, matches, results)
- Member 4 – Teams / Products (teams, members, join requests, invites, products, product images)
- Member 5 – Cart / Orders (carts, cart items, orders, statuses)

## Academic Context
Developed at **Esprit School of Engineering – Tunisia**  
PIDEV – 3A52 | Academic Year 2025–2026

## Getting Started

### Prerequisites
- PHP 8.x
- Composer
- MySQL
- Symfony CLI (optional)

### Installation
```bash
git clone <REPO_URL>
cd Esprit-PIDEV-3A52-2526-PULSE
composer install
cp .env .env.local
# configure DATABASE_URL in .env.local

php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate -n

symfony server:start
