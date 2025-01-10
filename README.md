# AzireVPN Location Tester

Small php script to ping all available locations and print the result ordered by ping time.

# Requirements

- curl
- php>=7
- ping 

# Usage

1. Get API/Device key from Account page: https://manager.azirevpn.com/account/token
2. Get all locations

```bash
curl -G https://api.azirevpn.com/v3/locations -H "Authorization: Bearer YOUR_TOKEN_HERE" -o data.json
```
3. Run ping.php

```bash
php ping.php
Locations sorted by ping:
Name: nl-ams, City: Amsterdam, Country: Netherlands, Pool: nl-ams.azirevpn.net, Ping: 16.60 ms
Name: de-ber, City: Berlin, Country: Germany, Pool: de-ber.azirevpn.net, Ping: 24.70 ms
Name: de-fra, City: Frankfurt, Country: Germany, Pool: de-fra.azirevpn.net, Ping: 35.30 ms
Name: it-mil, City: Milan, Country: Italy, Pool: it-mil.azirevpn.net, Ping: 36.40 ms
Name: ro-buh, City: Bucharest, Country: Romania, Pool: ro-buh.azirevpn.net, Ping: 39.10 ms
Name: se-got, City: Gothenburg, Country: Sweden, Pool: se-got.azirevpn.net, Ping: 42.30 ms
Name: fr-par, City: Paris, Country: France, Pool: fr-par.azirevpn.net, Ping: 43.20 ms
Name: es-mad, City: Madrid, Country: Spain, Pool: es-mad.azirevpn.net, Ping: 44.20 ms
Name: ch-zrh, City: Zürich, Country: Switzerland, Pool: ch-zrh.azirevpn.net, Ping: 48.30 ms
Name: fi-hel, City: Helsinki, Country: Finland, Pool: fi-hel.azirevpn.net, Ping: 49.00 ms
Name: ua-iev, City: Kyiv, Country: Ukraine, Pool: ua-iev.azirevpn.net, Ping: 58.20 ms
Name: dk-cph, City: Copenhagen, Country: Denmark, Pool: dk-cph.azirevpn.net, Ping: 59.10 ms
Name: se-mma, City: Malmö, Country: Sweden, Pool: se-mma.azirevpn.net, Ping: 61.50 ms
Name: se-sto, City: Stockholm, Country: Sweden, Pool: se-sto.azirevpn.net, Ping: 61.90 ms
Name: no-osl, City: Oslo, Country: Norway, Pool: no-osl.azirevpn.net, Ping: 62.00 ms
Name: gb-lon, City: London, Country: United Kingdom, Pool: gb-lon.azirevpn.net, Ping: 69.80 ms
Name: es-mal, City: Málaga, Country: Spain, Pool: es-mal.azirevpn.net, Ping: 73.30 ms
Name: us-nyc, City: New York, Country: United States, Pool: us-nyc.azirevpn.net, Ping: 103.00 ms
Name: ca-tor, City: Toronto, Country: Canada, Pool: ca-tor.azirevpn.net, Ping: 112.00 ms
Name: us-chi, City: Chicago, Country: United States, Pool: us-chi.azirevpn.net, Ping: 117.00 ms
Name: us-dal, City: Dallas, Country: United States, Pool: us-dal.azirevpn.net, Ping: 129.00 ms
Name: us-mia, City: Miami, Country: United States, Pool: us-mia.azirevpn.net, Ping: 149.00 ms
Name: us-sfo, City: San Francisco, Country: United States, Pool: us-lax.azirevpn.net, Ping: 176.00 ms
Name: us-sea, City: Seattle, Country: United States, Pool: us-sea.azirevpn.net, Ping: 184.00 ms
Name: th-hkt, City: Rawai, Country: Thailand, Pool: th-hkt.azirevpn.net, Ping: 213.00 ms
Name: hk-hkg, City: Hong Kong, Country: Hong Kong, Pool: hk-hkg.azirevpn.net, Ping: 268.00 ms
Name: ar-bue, City: Buenos Aires, Country: Argentina, Pool: ar-bue.azirevpn.net, Ping: 270.00 ms
Name: sg-sin, City: Singapore, Country: Singapore, Pool: sg-sin.azirevpn.net, Ping: 286.00 ms
```

# LICENSE
MIT
