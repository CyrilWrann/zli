# Hello World Quiz

Ich habe ein kleines Quiz mit PHP gemacht. Das Programm fragt, wie «Hallo Welt» auf Englisch heisst. Wenn die Antwort falsch ist, kommt die Frage nochmals. Bei der richtigen Antwort ist das Quiz fertig.
## Starten

Speicherte den Code als `QUIZ_projekt.php`. Dann kannst man das Programm im Terminal starten:

```bash
php projekt.php
```

Die richtige Antwort ist `Hello World`.


## Was im Programm vorkommt

- `question()` stellt die Frage.
- `correct()` prüft die Antwort und gibt `true` oder `false` zurück.
- Die `do ... while`-Schleife fragt so lange, bis die Antwort stimmt.
- Mit `if ... else` wird entschieden, ob die Antwort richtig ist.
- `strtolower()` macht den Text für die Ausgabe klein.

## Noch zu beachten

Im Moment muss man genau `Hello World` eingeben. Gross- und Kleinschreibung wird bei der Prüfung NICHT ignoriert.
