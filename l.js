var dropDown = document.getElementById("locations");

dropDown.onchange = function()
{
if(this.selectedIndex !== 0)
{
    window.location.href=this.value;
}
};