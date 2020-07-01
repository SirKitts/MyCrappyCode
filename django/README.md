# Django

```
python -m django --version
```

### Creating Projects

```
django-admin startproject mysite
```

```
mysite/
    manage.py
    mysite/
        __init__.py
        settings.py
        urls.py
        asgi.py
        wsgi.p
```

### To run
```
python manage.py runserver
python manage.py runserver 8080
```

### Creating Apps
```
python manage.py startapp polls
```

```
polls/
    __init__.py
    admin.py
    apps.py
    migrations/
        __init__.py
    models.py
    tests.py
    views.py
```

### References
```
https://docs.djangoproject.com/en/3.0/intro/tutorial01/
https://docs.djangoproject.com/en/3.0/topics/db/models/
```
