#### Creating Urls

polls/urls.py
```
from django.urls import path

from . import views

urlpatterns = [
    path('', views.index, name='index'),
]
```

mysite/urls.py
```
from django.contrib import admin
from django.urls import include, path

urlpatterns = [
    path('polls/', include('polls.urls')),
    path('admin/', admin.site.urls),
]
```

#### Creating Models
polls/models.py
```
from django.db import models


class Question(models.Model):
    question_text = models.CharField(max_length=200)
    pub_date = models.DateTimeField('date published')


class Choice(models.Model):
    question = models.ForeignKey(Question, on_delete=models.CASCADE)
    choice_text = models.CharField(max_length=200)
    votes = models.IntegerField(default=0)
```

Then, run
```
python manage.py makemigrations
```

It will show something like this
```
Migrations for ‘article’:
 article/migrations/0001_initial.py
 — Create model Article
```

Then, 
```
python manage.py migrate
```

#### Activating Models
mysite/settings.py
```
INSTALLED_APPS = [
    'polls.apps.PollsConfig',
    'django.contrib.admin',
    'django.contrib.auth',
    'django.contrib.contenttypes',
    'django.contrib.sessions',
    'django.contrib.messages',
    'django.contrib.staticfiles',
]
```

```
python manage.py makemigrations polls
```

```
python manage.py sqlmigrate polls 0001
```

```
python manage.py migrate
```

#### Creating REST Api
```
pip install djangorestframework
```

### References
```
https://medium.com/quick-code/crud-app-using-vue-js-and-django-516edf4e4217
https://github.com/michaelbukachi/django-vuejs-tutorial/wiki/Django-Vue.js-Integration-Tutorial
```

It's best to create a virtual environment and run your Django code inside this virtual environment, this helps in not changing your existing environments. Here are the basic steps to start with the virtual environment and Django.

#### Create a new Directory and cd into it.
```
mkdir test
cd test
```

#### Install and Create a Virtual environment.

```
python3 -m pip install virtualenv
virtualenv venv -p python3
```

#### Activate Virtual Environment: source venv/bin/activate

```
Install Django: pip install django

Start a new project: django-admin startproject myproject

cd to your project and Run Project:

cd myproject , python manage.py runserver
```

You can see your project here : http://127.0.0.1:8000/
