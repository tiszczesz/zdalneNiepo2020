# Początek kursu

## Przydatne linki:
### System Android:
https://pl.wikipedia.org/wiki/Android_(system_operacyjny)
### Wersje Android:
https://pl.wikipedia.org/wiki/Wersje_systemu_Android
### Strona dla programistów Android
https://developer.android.com/

# Narzędzia do pracy z systemami na urządzenia mobilne:
### Cordova:

https://cordova.apache.org/

### Visual Studio Tools for Xamarin:

https://visualstudio.microsoft.com/pl/vs/features/mobile-app-development/

### React Native:

https://reactnative.dev/

### Flutter is Google's UI toolkit for building beautiful, natively compiled applications for mobile, web, desktop, and embedded devices from a single codebase. 

https://flutter.dev/

### Android Studio

https://developer.android.com/studio

# Tworzenie wyglądu aplikacji mobilnej

https://material.io/

https://material.io/blog/jetpack-compose-catalog

# Podstawy Kotlin

https://kotlinlang.org/docs/basic-syntax.html

# Pętle i instrukcje warunkowe

https://kotlinlang.org/docs/control-flow.html

## if

```kotlin
var max = a
if (a < b) max = b

// With else
var max: Int
if (a > b) {
    max = a
} else {
    max = b
}

// As expression
val max = if (a > b) a else b

```

## when

```kotlin
when (x) {
    1 -> print("x == 1")
    2 -> print("x == 2")
    else -> { // Note the block
        print("x is neither 1 nor 2")
    }
}

```
