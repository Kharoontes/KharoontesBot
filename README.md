# KharoontesBot -

 Comandos para Nightbot 


# !followage Command

!commands add !followage $(urlfetch https://2g.be/twitch/following.php?user=$(touser)&channel=$(channel)&format=mwdhms)

# !duelo Command

!commands add !duelo $(urlfetch http://rokbot.xyz/smm.php?msg=$(user) ha retado a $(touser) a un duelo a muerte con cuchillos.
`La Pelea esta en sus ultimas fases pero ambos saben que solo ganara uno de ellos` .`Se muerden, rasgunan y se pican los ojos el uno al otro.`$(eval u=["$(user)","$(touser)"];u=u[Math.floor(Math.random()*2)];r="GANADOR: "+u;)&i=5&d=1)

# !Ruleta Rusa Command

!commands add !ruleta $(user) $(eval const responses = ['jaló el gatillo y... la bala no fue disparada.', 'jaló el gatillo y... la bala no fue disparada.', 'jaló el gatillo y... la bala no fue disparada.', 'jaló el gatillo y... la bala no fue disparada.', 'jaló el gatillo y... el arma le disparó una bala de Cum causando su muerte', 'jaló el gatillo y... la bala no fue disparada']; responses [Math.floor(Math.random() * responses.length)];)

# !shoutout (SO) Command

!commands add !followage Gracias por el Host , Sigan a $(touser) at twitch.tv/$(touser) es tremendo su stream !!


