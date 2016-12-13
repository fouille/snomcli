from xmlrpclib import ServerProxy, Error
 
server = ServerProxy("https://comunic:KkN9rRjh@provisioning.snom.com:8083/xmlrpc/", verbose=True, allow_none=True)
server.network.echo("ping")
print server.redirect.deregisterPhone("00041300EEEE")
print server.redirect.registerPhone("00041300EEEE", "http://wiki/prov/config.xml")
print server.redirect.listPhones("snom100")
