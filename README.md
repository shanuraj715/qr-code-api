# QR Code Generator

### Developed By Shanu Raj

##### This is a free API developed by `Shanu Raj`. You can use this API to create Unlimited Free QR Codes. Usage instructions are given below.

---

#### API URL

[https://qrcode.shanuthewebdev.in/qr](https://qrcode.shanuthewebdev.in/qr)

#### Options / Parameters

> - data (Required)
> - size (Optional)
> - image (Optional)
> - logosize (Optional)
> - padding (Optional)
> - color (Optional)
> - bgcolor (Optional)
> - errorcorrection (Optional)
> - label (Optional)

&nbsp;

### About Options / Parameters

`Req: Required and Opt: Optional`

| Param Name        | Type | Description                                                                                                                                                                                |
| ----------------- | ---- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `data`            | Req  | This is a required parameter for the QR code. QR Code will use this to create the QR Code. if empty or not passed you will get 500 (Internal server error) response from the server.       |
| `size`            | Opt  | This will be used to set the QR Code size. Min value should be atleast 40 and max value should be 500                                                                                      |
| `image`           | Opt  | This will be used as logo. Pass only image URL. http:// or https:// protocols only.                                                                                                        |
| `logosize`        | Opt  | Size of the logo. Min Value should be 40 and max value should be 100. (Please do not use higher value. If Used your QR will not be scanned).                                               |
| `padding`         | Opt  | The space around the QR Code.                                                                                                                                                              |
| `color`           | Opt  | The color of the QR Code. Use only RGB Color. Do not use HEX or anything. Default is Black.                                                                                                |
| `bgcolor`         | Opt  | The background color of the QR Code. Use only RGB Color. Do not use HEX or anything. Default is White.                                                                                     |
| `errorcorrection` | Opt  | The error correction level of the QR code. use values from 1 to 4. 1 means low error correction and 4 means high. If this value is low then QR May not be scanned if damaged. Default is 2 |
| `label`           | Opt  | The text that will be printed below the QR Code                                                                                                                                            |

&nbsp;

### Example 1

[https://qrcode.shanuthewebdev.in/qr?data=someTextHere](https://qrcode.shanuthewebdev.in/qr?data=someTextHere)

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <img
      src="https://qrcode.shanuthewebdev.in/qr?data=someTextHere"
      alt="qr-code"
    />
  </body>
</html>
```

#### Output 1

![data parameter](https://qrcode.shanuthewebdev.in/images/default.png)

---

&nbsp;

### Example 2

[https://qrcode.shanuthewebdev.in/qr?data=someTextHere&size=500](https://qrcode.shanuthewebdev.in/qr?data=someTextHere&size=500)

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <img
      src="https://qrcode.shanuthewebdev.in/qr?data=someTextHere&size=500"
      alt="qr-code"
    />
  </body>
</html>
```

#### Output 2

![size parameter](https://qrcode.shanuthewebdev.in/images/size.png)

---

&nbsp;

### Example 3

[https://qrcode.shanuthewebdev.in/qr?data=someTextHere&image=https://www.techfacts007.in/wp-content/uploads/2022/07/icon-e1658956028315.png&logosize=55](https://qrcode.shanuthewebdev.in/qr?data=someTextHere&image=https://www.techfacts007.in/wp-content/uploads/2022/07/icon-e1658956028315.png&logosize=55)

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <img
      src="https://qrcode.shanuthewebdev.in/qr?data=someTextHere&image=https://www.techfacts007.in/wp-content/uploads/2022/07/icon-e1658956028315.png&logosize=55"
      alt="qr-code"
    />
  </body>
</html>
```

#### Output 3

![](https://qrcode.shanuthewebdev.in/images/logo.png)

---

&nbsp;

### Example 4

[https://qrcode.shanuthewebdev.in/qr?data=someTextHere&padding=45](https://qrcode.shanuthewebdev.in/qr?data=someTextHere&padding=45)

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <img
      src="https://qrcode.shanuthewebdev.in/qr?data=someTextHere&padding=45"
      alt="qr-code"
    />
  </body>
</html>
```

#### Output 4

![](https://qrcode.shanuthewebdev.in/images/padding.png)

---

&nbsp;

### Example 5

[https://qrcode.shanuthewebdev.in/qr?data=someTextHere&color=214,48,49](https://qrcode.shanuthewebdev.in/qr?data=someTextHere&color=214,48,49)

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <img
      src="https://qrcode.shanuthewebdev.in/qr?data=someTextHere&color=214,48,49"
      alt="qr-code"
    />
  </body>
</html>
```

#### Output 5

![](https://qrcode.shanuthewebdev.in/images/color.png)

---

&nbsp;

### Example 6

[https://qrcode.shanuthewebdev.in/qr?data=someTextHere&bgcolor=0,206,201](https://qrcode.shanuthewebdev.in/qr?data=someTextHere&bgcolor=0,206,201)

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <img
      src="https://qrcode.shanuthewebdev.in/qr?data=someTextHere&bgcolor=0,206,201"
      alt="qr-code"
    />
  </body>
</html>
```

#### Output 6

![](https://qrcode.shanuthewebdev.in/images/bgcolor.png)

---

&nbsp;

### Example 7

[https://qrcode.shanuthewebdev.in/qr?data=someTextHere&errorcorrection=4](https://qrcode.shanuthewebdev.in/qr?data=someTextHere&errorcorrection=4)

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <img
      src="https://qrcode.shanuthewebdev.in/qr?data=someTextHere&errorcorrection=4"
      alt="qr-code"
    />
  </body>
</html>
```

#### Output 7

![](https://qrcode.shanuthewebdev.in/images/correctionlevel.png)

---

&nbsp;

### Example 8

[https://qrcode.shanuthewebdev.in/qr?data=someTextHere&label=Created%20By%20Shanu%20Raj](https://qrcode.shanuthewebdev.in/qr?data=someTextHere&label=Created%20By%20Shanu%20Raj)

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <img
      src="https://qrcode.shanuthewebdev.in/qr?data=someTextHere&label=Created%20By%20Shanu%20Raj"
      alt="qr-code"
    />
  </body>
</html>
```

#### Output 8

![](https://qrcode.shanuthewebdev.in/images/label.png)

---

&nbsp;

### Example With All Parameters

[https://qrcode.shanuthewebdev.in/qr?data=someTextHere&label=Created%20By%20Shanu%20Raj&image=https://www.techfacts007.in/wp-content/uploads/2022/07/icon-e1658956028315.png&size=400&logosize=50&color=192,57,43&bgcolor=200,200,120](https://qrcode.shanuthewebdev.in/qr?data=someTextHere&label=Created%20By%20Shanu%20Raj&image=https://www.techfacts007.in/wp-content/uploads/2022/07/icon-e1658956028315.png&size=400&logosize=50&color=192,57,43&bgcolor=200,200,120)

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <img
      src="https://qrcode.shanuthewebdev.in/qr?data=someTextHere&label=Created%20By%20Shanu%20Raj&image=https://www.techfacts007.in/wp-content/uploads/2022/07/icon-e1658956028315.png&size=400&logosize=50&color=192,57,43&bgcolor=200,200,120"
      alt="qr-code"
    />
  </body>
</html>
```

#### Output

![with all parameters](https://qrcode.shanuthewebdev.in/images/all.png)

---

#### Hope this will help you in your projects.

## License

MIT

**Free API, by shanuraj715!**
