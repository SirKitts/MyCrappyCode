# VUE

### Installation

```
brew tap heroku/brew && brew install heroku

or download the installer at
https://devcenter.heroku.com/articles/heroku-cli
```

### Sample: Deploying Vue app to Heroku
```
cd ../to-your vue-directory
git init
npm init
heroku create

NODE_ENV=production npm install
npm run serve
```

#### Creating a production build
```
npm run build
```

#### Edit static.json and package.json files
```
heroku static:init
heroku buildpacks:clear
heroku buildpacks:add heroku/nodejs
heroku buildpacks:add https://github.com/hone/heroku-buildpack-static
```

```
{
  "root": "dist",
  "clean_urls": true,
  "routes": {
    "/**": "index.html"
  }
}
```

```
"start": "vue-cli-service serve"
```

#### Be sure it's runnning on local
```
npm start
```

### Deploying to Heroku
```
git add .
git commit -m "add your comment here"
git push heroku master
```

### Test local using heroku command
```
heroku local web
```

### Running app on heroku
```
heroku open
```

### References
https://www.heroku.com/
https://devcenter.heroku.com/articles/getting-started-with-nodejs
https://devcenter.heroku.com/articles/heroku-cli
https://cli.vuejs.org/guide/deployment.html#heroku

