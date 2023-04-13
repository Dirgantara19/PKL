package rps;

import java.awt.Color;
import java.awt.Font;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.MouseAdapter;
import java.awt.event.MouseEvent;
import java.awt.Image;

import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.ImageIcon;

import java.util.Random;

public class Game {

	JLabel rndm;
	JLabel win;
	JLabel loss;
	JFrame frame;
	JButton rock;
	JButton paper;
	JButton scissor;
	JButton again;
	JLabel status;
	JLabel option;
	JLabel col;
	JLabel you;
	ImageIcon iconrock;
	ImageIcon iconpaper;
	ImageIcon iconscissors;
	ImageIcon icontrophy;
	ImageIcon icondead;

	Image imagerock;
	Image imagepaper;
	Image imagescissors;
	Image imagetrophy;
	Image imagedead;

	ImageIcon resizedIconrock;
	ImageIcon resizedIconpaper;
	ImageIcon resizedIconscissors;
	ImageIcon resizedImagetrophy;
	ImageIcon resizedImagedead;

	public void gameWindow() {
		frame = new JFrame("Rock Paper Scissors");
		Font small = new Font("Segoe Script", Font.PLAIN, 12);
		Font score = new Font("Segoe Script", Font.BOLD, 50);

		// --------------------BACK BUTTON-------------------------
		JLabel back = new JLabel("< BACK");
		back.setBounds(20, 20, 150, 30);
		back.setForeground(Color.decode("#373737"));
		back.setFont(new Font("Segoe Script", Font.BOLD, 20));
		frame.add(back);
		back.addMouseListener(new MouseAdapter() {
			@Override
			public void mouseClicked(MouseEvent e) {
				frame.dispose();
				FrontPage.front();
			}
		});
		// ----------------------------------------------------------

		// -----------------SCOREBOARD------------------------------
		you = new JLabel("YOU        COM");
		you.setBounds(175, 150, 150, 50);
		you.setForeground(Color.decode("#373737"));
		you.setFont(small);
		win = new JLabel("0");
		win.setBounds(165, 180, 150, 50);
		win.setForeground(Color.decode("#373737"));
		win.setFont(score);
		col = new JLabel(":");
		col.setBounds(210, 180, 150, 50);
		col.setForeground(Color.decode("#373737"));
		col.setFont(score);
		loss = new JLabel("0");
		loss.setBounds(235, 180, 150, 50);
		loss.setForeground(Color.decode("#373737"));
		loss.setFont(score);
		frame.add(win);
		frame.add(loss);
		frame.add(col);
		frame.add(you);
		// ---------------------------------------------------------

		// ---------------STATUS------------------------------------
		icontrophy = new ImageIcon("../rps/rps/assets/trophy.png");
		imagetrophy = icontrophy.getImage().getScaledInstance(100, 100, Image.SCALE_SMOOTH);
		resizedImagetrophy = new ImageIcon(imagetrophy);

		icondead = new ImageIcon("../rps/rps/assets/dead.png");
		imagedead = icondead.getImage().getScaledInstance(100, 100, Image.SCALE_SMOOTH);
		resizedImagedead = new ImageIcon(imagedead);

		status = new JLabel();
		status.setBounds(169, 150, 120, 120);
		status.setForeground(Color.decode("#373737"));
		frame.add(status);

		// ---------------------------------------------------------

		// ------------------OPTION TEXT----------------------------
		option = new JLabel();
		option.setBounds(50, 150, 102, 102);
		option.setForeground(Color.decode("#373737"));
		option.setFont(new Font("Segoe Script", Font.BOLD, 20));
		frame.add(option);
		// ----------------------------------------------------------

		// ------------------RANDOM TEXT--------------------------------
		rndm = new JLabel();
		rndm.setBounds(290, 150, 102, 102);
		rndm.setForeground(Color.decode("#373737"));
		frame.add(rndm);
		// --------------------------------------------------------------

		// -----------------ROCK BUTTON----------------------------------
		iconrock = new ImageIcon("../rps/rps/assets/rock.png");
		imagerock = iconrock.getImage().getScaledInstance(100, 100, Image.SCALE_SMOOTH);
		resizedIconrock = new ImageIcon(imagerock);

		rock = new JButton("ROCK");
		rock.setBounds(50, 350, 100, 50);
		rock.setFont(small);
		rock.setForeground(Color.decode("#e5dfe8"));
		rock.setBackground(Color.decode("#373737"));
		frame.add(rock);
		rock.addActionListener(new ActionListener() {
			@Override
			public void actionPerformed(ActionEvent e) {
				option.setIcon(resizedIconrock);
				check(operation(0));
			}
		});
		// -------------------------------------------------------

		// ---------------PAPER BUTTON--------------------------------
		iconpaper = new ImageIcon("../rps/rps/assets/paper.png");
		imagepaper = iconpaper.getImage().getScaledInstance(100, 100, Image.SCALE_SMOOTH);
		resizedIconpaper = new ImageIcon(imagepaper);

		paper = new JButton("PAPER");
		paper.setBounds(175, 350, 100, 50);
		paper.setFont(small);
		paper.setForeground(Color.decode("#e5dfe8"));
		paper.setBackground(Color.decode("#373737"));
		frame.add(paper);
		paper.addActionListener(new ActionListener() {
			@Override
			public void actionPerformed(ActionEvent e) {
				option.setIcon(resizedIconpaper);
				check(operation(1));
			}
		});
		// ------------------------------------------------------------

		// --------------------SCISSORS BUTTON-------------------------
		iconscissors = new ImageIcon("../rps/rps/assets/scissors.png");
		imagescissors = iconscissors.getImage().getScaledInstance(100, 100, Image.SCALE_SMOOTH);
		resizedIconscissors = new ImageIcon(imagescissors);

		scissor = new JButton("SCISSORS");
		scissor.setBounds(300, 350, 100, 50);
		scissor.setFont(small);
		scissor.setForeground(Color.decode("#e5dfe8"));
		scissor.setBackground(Color.decode("#373737"));
		frame.add(scissor);
		scissor.addActionListener(new ActionListener() {
			@Override
			public void actionPerformed(ActionEvent e) {
				option.setIcon(resizedIconscissors);
				check(operation(2));
			}
		});
		// -------------------------------------------------------------

		// -----------PLAY AGAIN-----------------------------------------
		again = new JButton("PLAY AGAIN");
		again.setBounds(50, 350, 350, 50);
		again.setFont(small);
		again.setForeground(Color.decode("#e5dfe8"));
		again.setBackground(Color.decode("#373737"));
		again.setVisible(false);
		frame.add(again);
		again.addActionListener(new ActionListener() {
			@Override
			public void actionPerformed(ActionEvent e) {
				frame.dispose();
				Game game = new Game();
				game.gameWindow();
			}
		});
		// --------------------------------------------------------------

		// ------------------------FRAME--------------------------------
		frame.setSize(460, 460);
		frame.setResizable(false);
		frame.setLayout(null);
		frame.setLocationRelativeTo(null);
		frame.setVisible(true);
		frame.setFocusable(true);
		frame.getContentPane().setBackground(Color.decode("#e5dfe8"));
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		// -----------------------------------------------------------------
	}

	// ---------GENERATING OPPONENT AND VALUATING RESULT-------------------
	private int operation(int op) {
		Random random = new Random();
		int k = random.nextInt(3);
		if (k == 0)
			rndm.setIcon(resizedIconrock);
		else if (k == 1)
			rndm.setIcon(resizedIconpaper);
		else
			rndm.setIcon(resizedIconscissors);
		if (op == k)
			return 0;
		else if (k == 0 && op == 2)
			return -1;
		else if (k == 2 && op == 0)
			return 1;
		else if (k < op)
			return 1;
		else
			return -1;
	}
	// -------------------------------------------------------------------------------

	int won = 0, lost = 0;

	// --------UPDATING SCORES AND CHECKING STATUS---------------------------
	private void check(int i) {
		if (i == -1)
			lost++;
		else if (i == 1)
			won++;
		win.setText(String.valueOf(won));
		loss.setText(String.valueOf(lost));
		if (won == 5) {
			rndm.setVisible(false);
			option.setVisible(false);
			win.setBounds(165, 80, 150, 50);
			col.setBounds(210, 80, 150, 50);
			loss.setBounds(235, 80, 150, 50);
			status.setIcon(resizedImagetrophy);
			again.setVisible(true);
			rock.setVisible(false);
			paper.setVisible(false);
			scissor.setVisible(false);
			you.setVisible(false);
		}
		if (lost == 5) {
			rndm.setVisible(false);
			option.setVisible(false);
			win.setBounds(165, 80, 150, 50);
			col.setBounds(210, 80, 150, 50);
			loss.setBounds(235, 80, 150, 50);
			status.setIcon(resizedImagedead);
			again.setVisible(true);
			rock.setVisible(false);
			paper.setVisible(false);
			scissor.setVisible(false);
			you.setVisible(false);
		}
	}
	// -----------------------------------------------------------------------
}