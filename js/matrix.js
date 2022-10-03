var tileSize = 20;
var maxStackHeight;
var columns = [];

function initMatrix()
{
    maxStackHeight = Math.ceil(canvas.height/tileSize);

    // divide the canvas into columns
    for ( let i = 0 ; i < canvas.width/tileSize ; ++i )
    {
        var column = {};
        // save the x position of the column
        column.x = i*tileSize;
        // create a random stack height for the column
        column.stackHeight = 10+Math.random()*maxStackHeight;
        // add a counter to count the stack height
        column.stackCounter = 0;
        // add the column to the list
        columns.push( column );
    }
}