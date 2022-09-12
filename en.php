<?php

//TODO
// - Pat
//
//
//
//


/*SŁOWNIK

King - Król
Rook - Wieża
Bishop - Goniec
Queen - Hetman       Używamy tego apostrofa ’
Knight - Skoczek
Pawn - Pion

*/

$title = <<<TITLE
Chesspedia
TITLE;

$main = <<<MAIN_PAGE
Main page
MAIN_PAGE;

$gameplay = <<<GAMEPLAY
Gameplay
GAMEPLAY;

$games = <<<GAMES
Play chess
GAMES;

$learn = <<<LEARN
Learn
LEARN;

$CONTENT_main = <<<CONTENT_MAIN
<h3>Welcome to Chesspedia - a website about a chess<h3>
CONTENT_MAIN;

$CONTENT_rules = <<<CONTENT_RULES
<h3>Gameplay</h3><hr>
<a>The first move is done white, then the players make movements alternately.
Execution of traffic is compulsory; you can not give up, even if it is to lead to losses or losses.
The game is played to one of the kings, the player’s resignation from the further play or when the draw was made,
whose rules are described below. In addition, if the game is limited by time control, the player who has exceeded the time loses.
The official rules of the game do not foresee the way of choosing a player playing white chessmen.
The rules of a given tournament determine who is playing white
(played eg in the Swiss or circular system) or,
in the case of an amateur game, mutual consent, where a form of random selection is often used:
one of the players hides the white paw in one hand and the black one in the other and leaves the indication
the opponent of the color of the players he will play with, to choose from.</a>
<br/><br/>


<h3>End of the party</h3><hr>
<a>The lot ends up winning one of the parties if:</a>
<li>the opponent’s king was mated</li>
<li> the opponent has subjected the game (it must be clearly signaled, usually giving the hand or stopping the clock does not mean in the light of batch submission regulations) </ li>
<a> When determining a batch result, it is sometimes necessary to judge if the player has enough players to give the opponent a mat. Suffice to be sufficient material to tarnish the king (the principle of the least reasonable defense is applied) at least: </a><li>pawn</li>
<li>knight and bishop</li>
<li>two bishop</li>
<li>two knight</li>
<li>rook</li>
<li>queen</li>
<li> and all items that mat can be given by correct moves </ li>
CONTENT_RULES;

$CONTENT_games = <<<GAMES

<li><a class="link" href="./game" title="Szachy klasyczne">Classic chess</a></li>
<li><a class="link" href="https://shogi.knei.pl" title="Japanese chess">Shōgi</a></li>

GAMES;

$CONTENT_learn = <<<CONTENT_LEARN
<li><a class="link" href="?lang=en&cont=learna">Chess pieces</a></li>
<li><a class="link" href="?lang=en&cont=learnb">Castling</a></li>
<li><a class="link" href="?lang=en&cont=learnc">Beating in passing</a></li>
<li><a class="link" href="?lang=en&cont=learnd">Pawn promotion</a></li>
<li><a class="link" href="?lang=en&cont=learne">Check</a></li>
<li><a class="link" href="?lang=en&cont=learnf">Draw</a></li>
<li><a class="link" href="?lang=en&cont=learng">Win</a></li>
CONTENT_LEARN;

$CONTENT_learna = <<<CHESSMEN
<a>Chess piece - a joint definition of pawns and figures appering in a chess game. Initially, each player has a set of the following chews in his color (white or black):<a><br/>
<li>1x <a class="link" href="?lang=en&cont=learna&c=a">King</a></li>
<li>1x <a class="link" href="?lang=en&cont=learna&c=b">Queen</a></li>
<li>2x <a class="link" href="?lang=en&cont=learna&c=c">Bishop</a></li>
<li>2x <a class="link" href="?lang=en&cont=learna&c=d">Knight</a></li>
<li>2x <a class="link" href="?lang=en&cont=learna&c=e">Rook</a></li>
<li>8x <a class="link" href="?lang=en&cont=learna&c=f">Pawn</a></li>
CHESSMEN;

$CONTENT_learnb = <<<CONTENT_ROSZADA
<h1>Castling</h1>
<a>Complain consists of moving the king by two squares towards the tower and then placing
tower on the other side of the king in the field with him neighboring. Castling is only possible if
when the following conditions are met: </a>
<li> The king and the tower participating in castling did not make any move. </ li>
<li> There are no other bucks between the king and the tower. </ li>
<li> The king can not be cheated, can not pass or end the movement in the field attacked by the opponent’s man. </ li>
<li> The king and tower must be in the same row. </ li>
CONTENT_ROSZADA;


$CONTENT_learnc = <<<CONTENT_BICIE
<h1> Beat in transit </h1>
<h3> En passant </h3>

<a> If player A moves a pawn by two squares, player B has a pawn in fifth, from his perspective, a row
and the adjacent column, the player's pawn B can knock down player A's peg as he did a move by one
field. This beating can be done only in the movements immediately after moving the vertical by two fields. </a>
CONTENT_BICIE;

$CONTENT_learnd = <<<CONTENT_BICIE
<h1> Pawn promotion </h1>
<a> If the division reaches the eighth row, then it is promoted (exchanged) to the hetman,
a tower, bishop or jumper of the same color, the choice depends on the player (usually hetman).
The choice is not limited to previously minted chews,
hence theoretically it is possible for the player to have nine hetmans or ten towers,
riders or jumpers (as long as all risers are promoted and none of the pieces of the type are
will be beaten). In the absence of the needed man, the player should call a judge to provide it </a>
CONTENT_BICIE;

$CONTENT_learne = <<<CONTENT_SZACH
<h1>Check</h1>
When a king is under immediate attack by one or two of the opponent's pieces, it is said to be in check. 
A move in response to a check is legal only if it results in a position where the king is no longer in check. 
This can involve capturing the checking piece; interposing a piece between the checking piece and the king 
(which is possible only if the attacking piece is a queen, rook, or bishop and there is a square between it and the king); 
or moving the king to a square where it is not under attack. Castling is not a permissible response to a check.
The object of the game is to checkmate the opponent; this occurs when the opponent's king is in check, 
and there is no legal way to remove it from attack. It is never legal for a player to make a move that puts or leaves the 
player's own king in check. In casual games it is common to announce "check" when putting the opponent's king in check, 
but this is not required by the rules of chess, and is not usually done in tournaments.
CONTENT_SZACH;

$CONTENT_learnf = <<<CONTENT_PAT
The situation in chess, in which one player can not make any move in accordance with the rules, but his king
is not <a class="link" href="szach.php?lang=en"> cheated </a>. According to the rules, the pat immediately ends the game with a draw
CONTENT_PAT;

$CONTENT_learng = <<<CONTENT_MAT
<h1>Win</h1>
Games can be won in the following ways:<br>
Checkmate: The player whose turn it is to move is in check and has no legal move to escape check.<br>
Resignation: Either player may resign, conceding the game to the opponent.<br>
It is usually considered poor etiquette to play on in a hopeless position, 
and for this reason high-level games rarely end in checkmate.
Win on time: In games with a time control, a player wins if the opponent runs out of time, 
even if the opponent has a superior position, as long as the player has a theoretical possibility to checkmate the opponent.
Forfeit: A player who cheats, violates the rules, or violates the rules specified for the particular tournament, can be forfeited. 
In high-level tournaments, players have been forfeited for such things as:
arriving late for the game (even by a matter of seconds);
receiving a call or text on a cell phone;
refusing to undergo a drug test;
refusing to undergo a body search for electronic devices;
unsporting behavior (e.g. refusing to shake hands with the opponent).
CONTENT_MAT;

$CONTENT_chessmen_1 = <<<CONTENT_CHESSMEN_1
<h1>King</h1>
<img height="200px" width="200px" title="Ruch króla" src="./img/king.svg"/></br>
<a> The King can move one space horizontally, vertically and diagonally.
At most once in the game the king can make a special move called <a class="link" href="#"> reversal </a>. </a>
CONTENT_CHESSMEN_1;

$CONTENT_chessmen_2 = <<<CONTENT_CHESSMEN_2
<h1>Queen</h1>
<img height="200px" width="200px" title="Ruch hetmana" src="./img/hetman.svg"/><br/>
<a>Queen can move any number of fields horizontally, vertically and diagonally.
In this way it combines the movement of the rook and the bishop. </a>
CONTENT_CHESSMEN_2;

$CONTENT_chessmen_3 = <<<CONTENT_CHESSMEN_3
<h1>Bishop</h1>
<img height="200px" width="200px" title="Ruch gońca" src="./img/goniec.svg"/><br/>
<a> The bishop can move any number of free boxes diagonally. </a>
CONTENT_CHESSMEN_3;

$CONTENT_chessmen_4 = <<<CONTENT_CHESSMEN_4
<h1>Knight</h1>
<img height="200px" width="200px" title="Ruch skoczka" src="./img/skoczek.svg"/><br/>
<a> Knight moves to the closest field not in the same row, column or diagonal; in other words
they move by two squares to the shape of the tower, and then to one square perpendicular to this direction. Motion
the jumper is compared to the letter "L". </a>
CONTENT_CHESSMEN_4;

$CONTENT_chessmen_5 = <<<CONTENT_CHESSMEN_5
<h1>Rook</h1>
<img height="200px" width="200px" title="Ruch wieży" src="./img/wieza.svg"/><br/>
<a> The rook moves any number of fields horizontally and vertically. </a>
CONTENT_CHESSMEN_5;

$CONTENT_chessmen_6 = <<<CONTENT_CHESSMEN_6
<h1>Pawn</h1>
<img height="200px" width="200px" title="Ruch piona" src="./img/oin.svg"/> <br/>
<a> The division has the most extensive rules of movement: </a>
<li> Pawn can move one space forward, if it is free.
In the first move, he has the option of moving two spaces if both are free </ li>
<li> Pawns are the only pieces that beat differently than they move. They can kill an enemy man if he is there
 on one of the two boxes next to the field in front of them (ie from the diagonal boxes in front of them), but they can not go there
 move if these fields are free. </ li>
CONTENT_CHESSMEN_6;

?>
