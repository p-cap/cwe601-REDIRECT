# cwe601-REDIRECT
This repo will demonstrate on how accepting a URL query in php can redirect users to a malicious site

# How to:
1. ```git clone https://github.com/p-cap/cwe601-REDIRECT.git```
2. ```cd cwe601-REDIRECT```
3. ```chmod 700 build-docker```
4. ```./build-docker```    
   NOTE: If you are receiving permission denied, use ```sudo ./build-docker```
5. connect to ```localhost:8080``` via browser
6. click on the ```PHP test page``` link
7. Add ```?url=bad.html``` to the end the url inside the browser search bar     
   NOTE: For the purpose of simplicity, ```bad.html``` is represented as the attacker's site
9. You should see ```Welcome to badness!```

