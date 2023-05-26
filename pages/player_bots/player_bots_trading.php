<!DOCTYPE html>
<html>

<h2>Buying items from Player Bots</h2>
This section lists everything Player Bots are able to sell to players, from faction items to certain quest items (to accomodate to the solo nature of the project) or special pieces of equipment, such as jewelry.
Simply click on the item you'd like to buy from a Player Bot below to have the line copied to your clipboard, ready to be pasted in your EverQuest session!

<h2 id="toc">List of purchasable items</h2>
<ol>
  <li><a href="#misc-tradeskills">Misc. Tradeskills</a></li>
  <li><a href="#misc-faction">Misc. Faction</a></li>
  <li><a href="#misc-quests">Misc. Quests</a></li>
  <li><a href="#misc-jewelry">Misc. Jewelry</a></li>
  <li><a href="#velious-gems">Velious Gems</a></li>
  <li><a href="#velious-faction">Velious Faction</a></li>
</ol>

    <h3 id="misc-tradeskills">Misc. Tradeskills</h3>
    <p>spiderling silk</p>
    <p>spider silk</p>
    <a href="#toc">Back to top</a>

    <h3 id="misc-faction">Misc. Faction</h3>
    <p>left goblin ear</p>
    <a href="#toc">Back to top</a>

    <h3 id="misc-quests">Misc. Quests</h3>
	<p>rebreather</p> 
    <a href="#toc">Back to top</a>

    <h3 id="misc-jewelry">Misc. Jewelry</h3>
	<p>velium fire wedding ring</p>
	<p>black sapphire velium necklace</p>
	<p>black sapphire electrum earring</p>
    <a href="#toc">Back to top</a>

    <h3 id="velious-gems">Velious Gems</h3>
    <p>flawless diamond</p>
    <p>flawed sea sapphire</p>
    <p>flawed emerald</p>
    <p>crushed coral</p>
    <p>crushed topaz</p>
    <p>crushed black marble</p>
    <p>crushed flame emerald</p>
    <p>black marble</p>
    <p>chipped onyx sapphire</p>
    <p>jaundice gem</p>
    <p>crushed lava ruby</p>
    <p>crushed opal</p>
    <p>crushed onyx sapphire</p>
    <p>pristine emerald</p>
    <p>nephrite</p>
    <p>flawed topaz</p>
    <p>crushed flame opal</p>
    <p>crushed jaundice gem</p>
    <a href="#toc">Back to top</a>

    <h3 id="velious-faction">Velious Faction</h3>
    <p>storm giant toe</p>
    <p>woven frost giant beard</p>
    <p>giant warrior helmet</p>
    <a href="#toc">Back to top</a>

    <!-- Leave this here -->
	<script>
		let paragraphs = document.getElementsByTagName("p");
		for(let i = 0; i < paragraphs.length; i++)
        {
			paragraphs[i].addEventListener("click", function()
            {
				let text = this.textContent;
				navigator.clipboard.writeText("buy a " + text)
					.then(() => console.log(`Copied "${text}" to clipboard!`))
					.catch((error) => console.error(`Failed to copy "${text}" to clipboard: ${error}`));
			});
		}
	</script>
</body>
</html>
