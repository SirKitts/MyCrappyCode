# IBMCloud
Commonly used commands

```
curl -sL https://ibm.biz/idt-installer | bash
ibmcloud dev help
ibmcloud login
ibmcloud target --cf
```

```
git clone https://github.com/IBM-Cloud/get-started-node.git
cd get-started-node
npm install
npm start

git clone https://github.com/IBM/nodejs-express-app.git
cd nodejs-express-app
npm install
npm run start

git clone https://github.com/IBM-Cloud/get-started-tomcat
```

```
mosquitto_sub -t "iot-2/type/test/id/4321/evt/status/fmt/+" -h 884pd1.messaging.internetofthings.ibmcloud.com -p 8883 --cafile messaging.pem -u a-884pd1-ssf7ibbelo -P r7iA*Fc7-hT6Q-*+() -i a:884pd1:test2

mosquitto_pub -t "iot-2/type/test/id/4321/evt/status/fmt/json" -m "{\"mesg\" : \"hello IBM\"}" -h 884pd1.messaging.internetofthings.ibmcloud.com -p 8883 --cafile messaging.pem -u a-884pd1-tdwswv6rrx -P  n(E_uUfv_MyqmApw9U -i a:884pd1:test1
```

```
mosquitto_sub -t "iot-2/type/test/id/4321/evt/status/fmt/+" -h 884pd1.messaging.internetofthings.ibmcloud.com -p 8883 --cafile messaging.pem -u a-884pd1-tdwswv6rrx -P n(E_uUfv_MyqmApw9U -i a:884pd1:test1

mosquitto_sub -d -t 'iot-2/type/test/id/4321/evt/status/fmt/+' -h 884pd1.messaging.internetofthings.ibmcloud.com -p 8883 --cafile messaging.pem -u a-884pd1-tdwswv6rrx -P n(E_uUfv_MyqmApw9U -i a:884pd1:test1

mosquitto_sub -d -t 'iot-2/type/test/id/4321/evt/status/fmt/+' -h 884pd1.messaging.internetofthings.ibmcloud.com -p 8883 --cafile messaging.pem -u 'a-884pd1-tdwswv6rrx' -P 'n(E_uUfv_MyqmApw9U' -i 'a:884pd1:test1'
```

```
mosquitto_pub -d -t 'iot-2/type/test/id/4321/evt/status/fmt/+' -m 'hello IBM' -h 884pd1.messaging.internetofthings.ibmcloud.com -p 8883 --cafile messaging.pem -u 'a-884pd1-tdwswv6rrx' -P 'n(E_uUfv_MyqmApw9U' -i 'a:884pd1:test1'

mosquitto_sub -d -t 'iot-2/type/test/id/4321/evt/status/fmt/+' -h 884pd1.messaging.internetofthings.ibmcloud.com -p 8883 --cafile messaging.pem -u 'a-884pd1-ssf7ibbelo' -P 'r7iA*Fc7-hT6Q-*+()' -i 'a:884pd1:test2'

mosquitto_pub -d -t 'iot-2/type/test/id/4321/evt/status/fmt/json' -m '{\”mesg\" : \"hello IBM\”}' -h 884pd1.messaging.internetofthings.ibmcloud.com -p 8883 --cafile messaging.pem -u 'a-884pd1-tdwswv6rrx' -P 'n(E_uUfv_MyqmApw9U' -i 'a:884pd1:test1'
```

```
mosquitto_pub -d -t 'iot-2/type/test/id/4321/evt/status/fmt/json' -m '{\"msg\": \"hello IBM\"}' -h 884pd1.messaging.internetofthings.ibmcloud.com -p 8883 --cafile messaging.pem -u 'a-884pd1-tdwswv6rrx' -P 'n(E_uUfv_MyqmApw9U' -i 'a:884pd1:test1'

mosquitto_sub -d -t 'iot-2/type/test/id/4321/evt/status/fmt/+' -h 884pd1.messaging.internetofthings.ibmcloud.com -p 8883 --cafile messaging.pem -u 'a-884pd1-ssf7ibbelo' -P 'r7iA*Fc7-hT6Q-*+()' -i 'a:884pd1:test2'
```

```
mosquitto_sub -d -t 'iot-2/type/test/id/4321/evt/status/fmt/+' -h 884pd1.messaging.internetofthings.ibmcloud.com -p 8883 --cafile messaging.pem -u 'a-884pd1-ssf7ibbelo' -P 'r7iA*Fc7-hT6Q-*+()' -i 'a:884pd1:test2'

mosquitto_pub -d -t 'iot-2/type/test/id/4321/evt/status/fmt/json' -m '{\"msg\": \"aha! IBM\"}' -h 884pd1.messaging.internetofthings.ibmcloud.com -p 8883 --cafile messaging.pem -u 'a-884pd1-tdwswv6rrx' -P 'n(E_uUfv_MyqmApw9U' -i 'a:884pd1:test1'
```