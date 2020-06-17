# Simple CMS app

## How setup application:

- install docker and docker-compose
- from project main directory run the command below:

```bash
docker-compose up -f docker/docker-compose.yml -d
```

## How setup app styles

- install npm
- from project main directory run the command below:

```bash
npm install
```

## Useful commands

```bash
docker-compose build --no-cache --pull
docker-compose up -d --build --force-recreate
```