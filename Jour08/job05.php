<?php
session_start();

// Fonction pour réinitialiser la partie
function resetGame() {
    $_SESSION['board'] = array_fill(0, 9, '-');
    $_SESSION['currentPlayer'] = 'X';
}

// Initialisation si pas encore fait
if (!isset($_SESSION['board'])) {
    resetGame();
}

// Si clic sur "Réinitialiser"
if (isset($_POST['reset'])) {
    resetGame();
}

// Si clic sur une case
if (isset($_POST['cell'])) {
    $cell = (int) $_POST['cell'];
    if ($_SESSION['board'][$cell] === '-') {
        $_SESSION['board'][$cell] = $_SESSION['currentPlayer'];
        // Vérifier victoire
        $wins = [
            [0,1,2],[3,4,5],[6,7,8], // lignes
            [0,3,6],[1,4,7],[2,5,8], // colonnes
            [0,4,8],[2,4,6]          // diagonales
        ];
        $winner = null;
        foreach ($wins as $comb) {
            if ($_SESSION['board'][$comb[0]] !== '-' &&
                $_SESSION['board'][$comb[0]] === $_SESSION['board'][$comb[1]] &&
                $_SESSION['board'][$comb[1]] === $_SESSION['board'][$comb[2]]) {
                $winner = $_SESSION['board'][$comb[0]];
                break;
            }
        }
        if ($winner) {
            $message = "$winner a gagné 🎉";
            resetGame();
        } elseif (!in_array('-', $_SESSION['board'])) {
            $message = "Match nul 🤝";
            resetGame();
        } else {
            // Changer de joueur
            $_SESSION['currentPlayer'] = ($_SESSION['currentPlayer'] === 'X') ? 'O' : 'X';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Morpion en PHP</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: linear-gradient(135deg, #89f7fe, #66a6ff);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 30px;
            color: #fff;
        }
        h1 { margin-bottom: 20px; text-shadow: 1px 1px 4px rgba(0,0,0,0.3); }
        table {
            border-collapse: collapse;
            margin-bottom: 15px;
            box-shadow: 0 6px 16px rgba(0,0,0,0.25);
            border-radius: 12px;
            overflow: hidden;
        }
        td {
            border: 2px solid #fff;
            width: 100px;
            height: 100px;
            text-align: center;
        }
        button {
            width: 100%;
            height: 100%;
            font-size: 32px;
            font-weight: bold;
            cursor: pointer;
            border: none;
            background: transparent;
            color: #333;
        }
        button:hover { background: rgba(255,255,255,0.2); }
        #status {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
            text-shadow: 1px 1px 4px rgba(0,0,0,0.3);
        }
        .resetBtn {
            padding: 8px 14px;
            font-size: 15px;
            cursor: pointer;
            border-radius: 8px;
            border: none;
            background: #fff;
            color: #333;
            font-weight: 600;
            box-shadow: 0 4px 8px rgba(0,0,0,0.25);
        }
        .resetBtn:hover { background: #f1f1f1; }
    </style>
</head>
<body>
    <h1>🎮 Morpion en PHP</h1>
    <div id="status">
        <?php 
            if (isset($message)) {
                echo $message;
            } else {
                echo "À jouer : " . $_SESSION['currentPlayer'];
            }
        ?>
    </div>

    <form method="post">
        <table>
            <?php for ($i=0; $i<3; $i++): ?>
                <tr>
                    <?php for ($j=0; $j<3; $j++): 
                        $index = $i*3 + $j; ?>
                        <td>
                            <?php if ($_SESSION['board'][$index] === '-'): ?>
                                <button type="submit" name="cell" value="<?= $index ?>">-</button>
                            <?php else: ?>
                                <button type="button" disabled><?= $_SESSION['board'][$index] ?></button>
                            <?php endif; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
        <button type="submit" name="reset" class="resetBtn">🔄 Réinitialiser</button>
    </form>
</body>
</html>
