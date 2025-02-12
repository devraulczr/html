const pokemonName = document.querySelector('.pokemon__name');
const pokemonNumber = document.querySelector('.pokemon__number');
const pokemonImage = document.querySelector('.pokemon__image');
const input = document.querySelector('.input__search');
const form = document.querySelector('.form');

const btnAdd = document.getElementById("add");
const btnRemove = document.getElementById("remove");

let last = 1;

const fetchPokemon = async (pokemon) => {
    const APIResponse = await fetch(`https://pokeapi.co/api/v2/pokemon/${pokemon}`);
    
    if (!APIResponse.ok) {
        pokemonName.innerHTML = "Not Found";
        pokemonNumber.innerHTML = "";
        pokemonImage.src = "";
        return null;
    }

    const data = await APIResponse.json();
    return data;
};

const renderPokemon = async (pokemon) => {
    const data = await fetchPokemon(pokemon);
    if (data) {
        pokemonName.innerHTML = data.name;
        pokemonNumber.innerHTML = data.id;
        last = data.id;
        pokemonImage.src = data.sprites.versions["generation-v"]["black-white"].animated.front_default;
    }
};

form.addEventListener('submit', (event) => {
    event.preventDefault();
    renderPokemon(input.value.toLowerCase());
});

const addF = () => {
    last += 1;
    renderPokemon(last);
    input.value = last
};

const removeF = () => {
    if (last > 1) {
        last -= 1;
        renderPokemon(last);
        input.value = last
    }
};

btnAdd.addEventListener('click', addF);
btnRemove.addEventListener('click', removeF);

renderPokemon(last);