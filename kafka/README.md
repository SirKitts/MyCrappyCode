# Kafka

### installation
```
brew install kafka
brew services list
brew services start zookeeper
brew services start kafka
brew services stop zookeeper
brew services stop kafka
```

### Running
```
zookeeper-server-start /usr/local/etc/kafka/zookeeper.properties & kafka-server-start /usr/local/etc/kafka/server.properties
```

### Sample Topics, Producer and Consumer
```
Creating Topics

kafka-topics --create --zookeeper localhost:2181 --replication-factor 1 --partitions 1 --topic test
kafka-topics --create --zookeeper localhost:2181 --replication-factor 1 --partitions 4 --topic test

kafka-topics --describe --zookeeper localhost:2181 --topic
kafka-topics --describe --zookeeper localhost:2181 --topic test1
```

```
Producer

kafka-console-producer --broker-list localhost:9092 --topic test
kafka-console-producer --broker-list localhost:9092 --topic test
```

```
Consumer

kafka-console-consumer --bootstrap-server localhost:9092 --topic test --from-beginning
kafka-console-consumer --bootstrap-server localhost:9092 --topic test --from-beginning
```

### References
https://www.tutorialspoint.com/apache_kafka/index.htm
https://www.javatpoint.com/apache-kafka
