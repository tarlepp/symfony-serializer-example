# What is this?

Just a quick demo how to use Symfony `Serializer` component.

## Question

Someone asked following on Symfony Slack workspace;

> Hello,
> I've request body as following:
> ```
> {
>    "name": "David",
>    "siblings": [
>        {
>             "name": "Brother's Name"
>        }
>    ]
> }
> ```
> How do I make Serializer to serialize "siblings" as SiblingDto ?
> This array-of-object serialization is seem to not be working, can't find anything on symfony doc

So this repository contains simple example how to make that happen.

## Installation

1. Clone this repository
2. Run `composer install`
3. Run `symfony serve`
4. Open shown URL with your browser
5. Profit

## Authors

* [Tarmo Leppänen](https://github.com/tarlepp)

## License

[The MIT License (MIT)](LICENSE)

Copyright © 2023 Tarmo Leppänen
