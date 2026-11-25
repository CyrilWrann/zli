# ARP-Spoofing
 
## Was ist ARP?
 
ARP steht für *Address Resolution Protocol*.
Es verbindet zwei Adressen im Netzwerk:
 
- **IP-Adresse** (z. B. `192.168.1.10`)
- **MAC-Adresse** (z. B. `AA:BB:CC:11:22:33`)
Ein Gerät fragt: «Wer hat die IP `192.168.1.1`?»
Das passende Gerät antwortet mit seiner MAC-Adresse.
 
## Was ist ARP-Spoofing?
 
Bei ARP-Spoofing schickt ein Angreifer **gefälschte ARP-Antworten**.
Er behauptet zum Beispiel: «Die IP des Routers gehört zu meiner MAC-Adresse.»
 
Das Problem: ARP hat **keine Prüfung**. Geräte glauben jede Antwort.
 
## Was passiert dann?
 
Der Datenverkehr läuft über den Angreifer.
Das nennt man **Man-in-the-Middle (MITM)**.
 
Er kann:
 
- Daten **mitlesen**
- Daten **verändern**
- die Verbindung **unterbrechen**
## Wie erkennt man es?
 
- Die gleiche MAC-Adresse hat plötzlich mehrere IPs.
- Das Netzwerk ist langsam oder bricht ab.
- Mit `arp -a` sieht man die ARP-Tabelle und kann Doppelte finden.
## Schutz
 
- **Verschlüsselung** nutzen (HTTPS, SSH, VPN). Mitgelesene Daten sind dann nutzlos.
- **Statische ARP-Einträge** für wichtige Geräte (z. B. Router).
- **Dynamic ARP Inspection (DAI)** auf Switches.
- **Port Security** am Switch.
- Nur **vertrauenswürdige Netzwerke** verwenden.
## Merksatz
 
> ARP vertraut jedem. Genau das nutzt ARP-Spoofing aus.