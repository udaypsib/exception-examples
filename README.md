# PHP Exception example scripts

This sample scripts have been prepared for explaining the usage of Exception in PHP. All the samples should be executed in console for clearity.

Note: We assume that PHP is install in Cli-environment.


## Usage

### custom-exception.php
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

