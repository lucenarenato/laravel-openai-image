#  Gerador de Imagens com IA usando Laravel e Open AI - Gerando a Imagem 

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About 

> Nos últimos anos, a inteligência artificial (IA) tem desempenhado um papel cada vez mais importante em diversas áreas, incluindo o desenvolvimento web. Uma das empresas líderes nesse campo é a Open AI, responsável por produtos inovadores que estão em Alta demanda no momento.

## Sobre a Open AI

> A Open AI é uma empresa de tecnologia conhecida por suas contribuições significativas no campo da IA. Ao longo dos últimos anos, eles desenvolveram diversas ferramentas e produtos que se tornaram tendências na indústria. Um dos produtos mais populares é o GPT-3, um modelo de linguagem natural de última geração. Com o GPT-3, é possível gerar textos de forma autônoma e até mesmo realizar conversas em linguagem natural. Essa tecnologia pode ser extremamente útil para criar chatbots avançados e personalizados para websites e aplicativos.

## Aplicação do Open AI no Desenvolvimento Web

O Open AI tem uma API que permite integrar seus modelos de linguagem natural em projetos web. Isso significa que podemos utilizar o GPT-3 em nosso aplicativo ou site, tornando-os mais eficientes e interativos. Em um exemplo prático, podemos usar a API do Open AI para criar um link em um site que permite aos usuários conversar com o conteúdo. Isso significa que os usuários poderão interagir com o conteúdo do site através de uma conversa em tempo real, tornando a leitura de artigos mais eficiente e envolvente.

```log
[2024-02-16 21:24:32] local.DEBUG: {"created":1708118672,"data":[{"url":"https:\/\/oaidalleapiprodscus.blob.core.windows.net\/private\/org-Exk0NnAnW3zy1yeZWyDaBKyu\/user-K5F9XchccPaTp4Lk2mkAEat9\/img-m4WzD2NbDLJwQuflXJwnu5Wu.png?st=2024-02-16T20%3A24%3A32Z&se=2024-02-16T22%3A24%3A32Z&sp=r&sv=2021-08-06&sr=b&rscd=inline&rsct=image\/png&skoid=6aaadede-4fb3-4698-a8f6-684d7786b067&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2024-02-16T02%3A30%3A06Z&ske=2024-02-17T02%3A30%3A06Z&sks=b&skv=2021-08-06&sig=Oz3nybOuecEA5WSAqxxpqbMrQlDwC3i3D9r1Z6VbDXA%3D","b64_json":"","revisedPrompt":null}]}  
[2024-02-16 21:24:32] local.DEBUG: https://oaidalleapiprodscus.blob.core.windows.net/private/org-Exk0NnAnW3zy1yeZWyDaBKyu/user-K5F9XchccPaTp4Lk2mkAEat9/img-m4WzD2NbDLJwQuflXJwnu5Wu.png?st=2024-02-16T20%3A24%3A32Z&se=2024-02-16T22%3A24%3A32Z&sp=r&sv=2021-08-06&sr=b&rscd=inline&rsct=image/png&skoid=6aaadede-4fb3-4698-a8f6-684d7786b067&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2024-02-16T02%3A30%3A06Z&ske=2024-02-17T02%3A30%3A06Z&sks=b&skv=2021-08-06&sig=Oz3nybOuecEA5WSAqxxpqbMrQlDwC3i3D9r1Z6VbDXA%3D  
[2024-02-16 21:30:27] local.DEBUG: {"created":1708119027,"data":[{"url":"https:\/\/oaidalleapiprodscus.blob.core.windows.net\/private\/org-Exk0NnAnW3zy1yeZWyDaBKyu\/user-K5F9XchccPaTp4Lk2mkAEat9\/img-UdlAqRAHKDR2TI9H6Bvin8F6.png?st=2024-02-16T20%3A30%3A27Z&se=2024-02-16T22%3A30%3A27Z&sp=r&sv=2021-08-06&sr=b&rscd=inline&rsct=image\/png&skoid=6aaadede-4fb3-4698-a8f6-684d7786b067&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2024-02-16T02%3A27%3A36Z&ske=2024-02-17T02%3A27%3A36Z&sks=b&skv=2021-08-06&sig=UK7olGXGZiZJFSzDPZbrNyVLjafOmM1piK1sJBAz4c4%3D","b64_json":"","revisedPrompt":null}]}  
[2024-02-16 21:30:27] local.DEBUG: https://oaidalleapiprodscus.blob.core.windows.net/private/org-Exk0NnAnW3zy1yeZWyDaBKyu/user-K5F9XchccPaTp4Lk2mkAEat9/img-UdlAqRAHKDR2TI9H6Bvin8F6.png?st=2024-02-16T20%3A30%3A27Z&se=2024-02-16T22%3A30%3A27Z&sp=r&sv=2021-08-06&sr=b&rscd=inline&rsct=image/png&skoid=6aaadede-4fb3-4698-a8f6-684d7786b067&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2024-02-16T02%3A27%3A36Z&ske=2024-02-17T02%3A27%3A36Z&sks=b&skv=2021-08-06&sig=UK7olGXGZiZJFSzDPZbrNyVLjafOmM1piK1sJBAz4c4%3D  
```

<p align="center"><img src="2024-02-16_18-13.png" width="400" alt="1"></p>
<p align="center"><img src="2024-02-16_18-12.png" width="400" alt="2"></p>
<p align="center"><img src="2024-02-16_18-25.png" width="250" alt="3"></p>
<p align="center"><img src="2024-02-16_18-31.png" width="400" alt="4"></p>


- https://www.youtube.com/watch?v=iRQZ7MhewY4&t=446s
- https://laravel.com/docs
- https://openai.com/docs
- https://platform.openai.com/api-keys
- https://packagist.org/packages/openai-php/client
- https://packagist.org/packages/openai-php/laravel
