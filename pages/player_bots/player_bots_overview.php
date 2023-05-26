<!DOCTYPE html>
<html>
<head>
	<title>EQEmu Player Bots</title>
	<meta charset="UTF-8">
</head>
<body>
<h1>
    EQEmu Player Bots Reference
</h1>

<h2>Introduction</h2>

<i>I wish I could play EverQuest on my own box solo, while not feeling so alone all the time in those empty zones...</i> If you feel this describes your situation to a T, rejoice ! 
The special Player Bots system developped in this EQEmu fork is doing just that: making most of the zones in Norrath come alive with "fake" players exploring, hunting,
trading or just simply...dying - this is EQ, after all... <br><br>

<h2>The Player Bot System</h2>
Player Bots are, at first, technically separate from the embedded EQEmu Bots. Behind the scenes, they're actually invisible NPCs with some customizations here and there, dynamically generated at spawn-time.
These broadly include, but are not limited to: <br>
<ul>
    <li>Blue nameplate, like players.</li>
    <li>They can leave corpses (non-lootable) upon death.</li>
    <li>They'll roam most zones freely and engage other mobs, simulating players Exp'ing.</li>
    <li>They can have guild tags for extra authenticity</li>
    <li>They'll "buy" and "sell" all sorts of items that were in demand back in the day (Deathfist belts, bone chips, animal pelts etc)</li>
    <li>Some classes (ie: enchanters) will be able to assist players with specific tasks like item enchantment (platinum bars etc)</li>
    <li>They come pre-equipped (that's the whole point) with gear, but in order to not throw things out of balance completely, gear quality is SolRo Temple quest gear at <b>most</b>.</li>
</ul>

The system is "fire and forget", and actually pretty low-maintenance: Player Bots live their lives just like a real player would.

<h2>Rationale</h2>
I developed this system due to various reasons:
<br>
<br>
I play on my own box, solo, and seeing all those beautiful but systematically empty zones is a bit depressing. EQEmu bots, while completely awesome, 
come with a major (in my opinion) drawback: they start-out completely naked. Gearing up one bot can be time-consuming. Equipping multiple bots to tackle on raid zones
 is pretty discouraging. I felt I needed another layer on top of the EQEmu bots, to bridge that gap.
<br><br>
I thought long about how I could deal with the two issues above, and came up with this idea of fake players roaming the world, equipped, and hunting mobs, 
ready to join you, the player. Don't get me wrong, I'm not implying <b>I</b> had the idea, in fact, it's a pretty recurring topic over @ EQEmu.
But since no one seemed to come up with a satisfying (to my taste!) solution, there weren't a ton of options left on the table besides...well. Doing it.
<br><br>
That system has been "live" in my EQEmu fork for a couple years now and is pretty rock-solid in what it originally set out to do. Zones are teeming with life, 
content is getting consumed, and since Player Bots have a certain level of gear already, the EQEmu bot "viability" curve is pretty flattened -- 
bots are useful as soon as you ^invite them.
<br>

<h2>Drawbacks</h2>
The main drawback of this system so far is, since Player Bots come pre-equipped, nothing prevents you from recruiting them and stripping them of all their gear for your personal gain. 
I'm solo on my server so that's not an issue but yeah, in order to properly "finalize" this system, I'll have to develop some kind of alternative EQEmu bot inventory (kinda like a "vault"), 
where all the Bot equipment would go when a player trades with them, instead of being returned to the player.


</body>
</html>
