// properties variable
var lover = 'Lover';

// khoi tao object
var character = {
    name: "Shikanoko",
    age:16,
    address: "Hino",
    [lover]: "None",
    getname: function()
    {
        return this.name;
    }
}
console.log(character)
// add thuoc tinh va key
character.email = "shikanoko@nokotan"
console.log(character)

// get value
console.log(character.name);

// delete key
delete(character.address)

// use method
console.log(character.getname())