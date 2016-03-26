---
layout: post
title: Enable gzip compression in Spring Boot
description: How to enable gzip compression in Spring Boot
locale: en
---

Add Jetty servlets depedency to your gradle file. This will add GzipHandler class necessary for compression

```gradle
dependencies {
    compile 'org.eclipse.jetty:jetty-servlets:9.2.9.v20150224'
}
```

Enable compression in your properties file

```ini
server.compression.enabled=true
server.compression.mime-types=application/xml,text/html,text/xml,text/plain
```
