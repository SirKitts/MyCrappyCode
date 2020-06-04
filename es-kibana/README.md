# Elastic Search and Kibana
Commonly used commands

### Installation
```
brew install elasticsearch
brew tap elastic/tap
brew install elastic/tap/kibana-full
```

### Run
```
elasticsearch
kibana

or

./bin/elasticsearch
./bin/kibana
```

### Samples

```
curl -GET http://localhost:9200/my_index/my_type/G123

curl -X GET "localhost:9200/_cat/count/syslogs?v"

curl -X GET http://localhost:9200/syslogs/_search\?q\=level:error\&pretty

curl -X GET http://xxx.xxx.0.xxx:9200/syslogs/_search\?q\=level:error\&pretty

curl -POST http://localhost:9200/my_index/my_type -curl -H 'Content-Type: application/json' -d '{"user":"Phil","message":"Hello World!"}'

curl -POST http://localhost:9200/my_index/my_type/G123 -curl -H 'Content-Type: application/json' -d '{"user":"Phil","message":"Hello World!"}'

curl -PUT http://localhost:9200/my_index/my_type/G123\?version\=1 -curl -H 'Content-Type: application/json' -d '{"user":"Phil","message":"Hello, World!"}'
```

### References
https://www.elastic.co/guide/en/elasticsearch/client/javascript-api/current/api-reference.html