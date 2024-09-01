# docker-php-slim

With ```docker``` and ```docker-compose``` installed, cd into the ```docker-php-slim``` directory and perform the following steps:

### Step 1 - Spin up your Docker application

```
docker-compose up
```

OR

```
docker-compose up -d
```

### Step 2 - Install required dependencies

```
docker exec -it docker_php_slim_app /bin/bash
composer install
```

OR

```
docker exec docker_php_slim_app /bin/bash -c "composer install"
```

### Step 3 - Visit your application

```
curl http://localhost:8000
```

OR

```
Go to your browser and visit http://localhost:8000
```