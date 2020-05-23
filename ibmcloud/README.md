# IBMCloud

### Installation
```
curl -sL https://ibm.biz/idt-installer | bash
ibmcloud dev help
ibmcloud login
ibmcloud target --cf
```

### Samples
```
Iot Subscribe and Publish Example:

mosquitto_sub -d -t 'iot-2/type/test/id/4321/evt/status/fmt/+' -h <ibmcloud-iot-messaging-host> -p 8883 --cafile messaging.pem -u '<subscriber-api-key>' -P '<subscriber-token>' -i 'a:<organization-d>:test2'

mosquitto_pub -d -t 'iot-2/type/test/id/4321/evt/status/fmt/json' -m '{\"msg\": \"hi IBM\"}' -h <ibmcloud-iot-messaging-host> -p 8883 --cafile messaging.pem -u '<publisher-api-key>' -P '<publisher-token>' -i 'a:<organization-d>:test1'
```

### References
https://www.ibm.com/cloud/cli
