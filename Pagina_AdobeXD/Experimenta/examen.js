function fixMe(my_list) {

    if (my_list.length % 2) { // imperative code
        var new_list = [];
        for (var item of my_list) {
            for (let element of item) {
                new_list = new_list.push(element);
            }
        }
    } else {  // functional code
        new_list = my_list.flat(0);
        conlose.log(new_list);
    }

    new_list.sort(function (x, y) { return x - y})
    return new_list;
}

var my_list = [3,4];
console.log(my_list);



