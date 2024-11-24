<?php

$Estilizacao_pagina = '
<style>
html, body {
    margin: 0;
    padding: 0;
    display: flex;
    height: 100%;
    flex-direction: column;
}

.Container {
    flex: 1; /* Para garantir que o Container ocupe todo o espaço disponível */
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* Distribui espaço entre Middle e Bottom */
    margin: 0;
    padding: 0;
    height: 100%;
}

.Top {
    display: flex;
    flex-direction: row;
    background: linear-gradient(to right, #f67299, #772976);
    margin: 0;
    padding: 0;
    align-items: flex-end; /* Para alinhar os itens a baixo */
    position: relative;
    height: 50px;
}

.Top h1 {
    margin: 4% 0 0 0;
    padding: 0% 6% 1% 3%;
    color: #fff;
    text-shadow: 0.19vh 0.1vh #949697;
    font-size: large;
}

.Top .Sino, .Top .Config {
    position: absolute; /* Para permitir posicionamento absoluto */
    bottom: 0; /* Alinha ao fundo do contêiner*/
    padding: 1% 2% 0 0;
    cursor: pointer;
    background: none;
    outline: none;
    border: none;
    color: inherit;
    font: inherit;
}

.Top .Sino:active, .Top .Config:active {
    opacity: 0.7; /* Diminui a opacidade ao clicar para um feedback visual */
}

.Top .Sino {
    right: 45px;
}

.Top .Config {
    right: 01px;
}

.Bottom{
    display: flex;
    justify-content: space-around; /* Distribui os links de maneira uniforme */
    align-items: center;    
    border: none;
    background: #fc9ccc;
}

.Bottom a{
    padding: 0;
}

@media (max-width: 319px) { /* Menor ou igual a 354 pixels*/
    .Bottom{
        display: block;
    }
}
</style>
';