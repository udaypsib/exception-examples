# PHP Exception example scripts

This sample scripts have been prepared for explaining the usage of Exception in PHP. All the samples should be executed in console for clearity.

Note: We assume that PHP is install in Cli-environment.


## Usage

### 1. try-catch.php
Simple example of try-catch usage

`php try-catch.php`

Output:
```
Normal code flow ends here.


```
`php try-catch.php 3`

Output:
```
Caught: $i should contain number greater than or equal to 10 only

```

### 2. try-finally.php
Example of try-finally block (without any catch block)

`$ php try-finally.php 2`

Output:
```
Hello World

=> Executed finally-block

+---------------------------------------------------------------------------------------------------------------------------+
| UNCAUGHT EXCEPTION                                                                                                        |
+---------------------------------------------------------------------------------------------------------------------------+
|                                                                                                                           |
| MESSAGE: Invalid integer - '2'                                                                                            |
| FILE: /Users/sendinblue-uday/SendInBlue/Projects/Training-sessions/session-8-jul-2019/exception-examples/try-finally.php  |
|                                                                                                                           |
+---------------------------------------------------------------------------------------------------------------------------+

```

### 3. try-catch-finally.php
Example of try-catch-finally block

`php try-catch-finally.php 9`

Output:
```
Caught: $i should contain number greater than or equal to 10 only

Finaly block => This code block will be executed always

```
### 4. custom-exception.php
This is sample script to define custom exceptions and its usage in code. See below the possible variation of outputs

`$ php custom-exception.php`

Output:
```

----------------------] SCRIPT START [--------------------
$custom is ok
Rope length is ok
Water tank level is normal

----------------------]  SCRIPT END  [--------------------

```
`$ php custom-exception.php 0`

Output:
```

----------------------] SCRIPT START [--------------------
***** [ Caught Custom(100): $custom can not be 0. ] *****
----------------------]  SCRIPT END  [--------------------

```
`$ php custom-exception.php 4 13`

Output:
```

----------------------] SCRIPT START [--------------------
$custom is ok
***** [ Caught Length (0): Rope length should be >= 100 ] *****
----------------------]  SCRIPT END  [--------------------

```
`$ php custom-exception.php 4 132 11`

Output: 
```

----------------------] SCRIPT START [--------------------
$custom is ok
Rope length is ok
***** [ Caught Overflow (0): Water tank is overflowing. ] *****
----------------------]  SCRIPT END  [--------------------

```


### 5. argument-count-error.php
An example of catching PHP's argument count exception

`php argument-count-error.php`

Output:
```

****************** ] strlen() expects exactly 1 parameter, 2 given [ **********************

```


### 6. exception-chaining.php
Explains the usage of chaining the exception objects as per the thrown hirarchy

`$ php exception-chaining.php`

Output: 
```
======[ Normal flow ends ]=====

Code normal execution
```
`$ php exception-chaining.php 4`

Output:
```

Last Exception: Runtime exception encountered.


 1: This value is not expected.


 2: Length should be >= 5


 3: In correct length 4
======] PRINTED ALL EXCEPTIONS [=====

```
`$ php exception-chaining.php 5`

Output:
```
Logical Exception: This is not expected
```
`$ php exception-chaining.php hello`

Output:
```
+----------------------------------------------------------------------------------------------------------------------------------+
| UNCAUGHT EXCEPTION                                                                                                               |
+----------------------------------------------------------------------------------------------------------------------------------+
|                                                                                                                                  |
| MESSAGE: Expecting numeric input only.                                                                                           |
| FILE: /Users/sendinblue-uday/SendInBlue/Projects/Training-sessions/session-8-jul-2019/exception-examples/exception-chaining.php  |
|                                                                                                                                  |
+----------------------------------------------------------------------------------------------------------------------------------+

```

### 7. multiple-catch.php
Catching multiple example.

`$ php multiple-catch.php`

Output: 
```
====] Normal execution ends here. [======

```
`$ php multiple-catch.php 342`

Output:
```

Caught Unexpected (101): $i should be less than or equal to 10.
File: /Users/sendinblue-uday/SendInBlue/Projects/Training-sessions/session-8-jul-2019/exception-examples/multiple-catch.php
Line: 11

```
