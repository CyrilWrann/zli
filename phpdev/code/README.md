# Hello World Quiz

I’ve created a little quiz using PHP. The programme asks what ‘Hello World’ is called in English. If the answer is wrong, the question is asked again. If the answer is correct, the quiz is finished.
## Getting started

Save the code as `QUIZ_projekt.php`. You can then run the programme in the terminal:

```bash
php projekt.php
```

The correct answer is `Hello World`.


## What’s in the programme

- `question()` asks the question.
- `correct()` checks the answer and returns `true` or `false`.
- The `do ... while` loop keeps asking until the answer is correct.
- `if ... else` is used to determine whether the answer is correct.
- `strtolower()` converts the text to lower case for output.

## Further notes

At the moment, you must enter exactly `Hello World`. The check is NOT case-insensitive.
