class Backpack {
    // properties
    constructor(size, color) {
        this.color = color;
        this.size = size;
        this.item = [];
        this.open = false;
    }

    // methods (behaviour)
    // open backpack
    open() {
        this.open = true;
        alert("You have openned the backpack.");
    }
    // close backpack
    close() {
        this.open = false;
        alert("You have closed the backpack.");
    }
    // put in items in the bag
    putin(item) {
        if (this.open = true) {
            this.item.push(item);
            alert("Item has been added to the backpack.");
        }
    }
    // take out items from the bag
    takeout(item) {
        var index = this.item.indexOf(item);
        if (this.open = true && index > -1) {
            this.item.splice(index, 1);
            alert("Item has been removed from the backpack.");
        }
    }
}

let bag1 = new Backpack("small", "blue");
let bag2 = new Backpack("medium", "red");
let bag3 = new Backpack("large", "green");

bag1.open();
bag1.putin("lunch");
bag1.putin("jacket");
bag1.close();
bag1.open();
bag1.takeout("jacket");
bag1.close();