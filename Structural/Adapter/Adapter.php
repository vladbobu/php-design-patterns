<?php

// Target Interface
interface MediaPlayer
{
    public function play(string $audioType, string $fileName): void;
}

// Adaptee Interface
interface AdvancedMediaPlayer
{
    public function playVlc(string $fileName): void;
    public function playMp4(string $fileName): void;
}

// Concrete Adaptee
class VlcPlayer implements AdvancedMediaPlayer
{
    public function playVlc(string $fileName): void
    {
        echo "Playing vlc file. Name: " . $fileName . "\n";
    }

    public function playMp4(string $fileName): void
    {
        // do nothing
    }
}

class Mp4Player implements AdvancedMediaPlayer
{
    public function playVlc(string $fileName): void
    {
        // do nothing
    }

    public function playMp4(string $fileName): void
    {
        echo "Playing mp4 file. Name: " . $fileName . "\n";
    }
}

// Adapter
class MediaAdapter implements MediaPlayer
{
    private AdvancedMediaPlayer $advancedMusicPlayer;

    public function __construct(string $audioType)
    {
        if ($audioType === "vlc") {
            $this->advancedMusicPlayer = new VlcPlayer();
        } elseif ($audioType === "mp4") {
            $this->advancedMusicPlayer = new Mp4Player();
        }
    }

    public function play(string $audioType, string $fileName): void
    {
        if ($audioType === "vlc") {
            $this->advancedMusicPlayer->playVlc($fileName);
        } elseif ($audioType === "mp4") {
            $this->advancedMusicPlayer->playMp4($fileName);
        }
    }
}

// Client code
class AudioPlayer implements MediaPlayer
{
    private MediaAdapter $mediaAdapter;

    public function play(string $audioType, string $fileName): void
    {
        if ($audioType === "mp3") {
            echo "Playing mp3 file. Name: " . $fileName . "\n";
        } elseif ($audioType === "vlc" || $audioType === "mp4") {
            $this->mediaAdapter = new MediaAdapter($audioType);
            $this->mediaAdapter->play($audioType, $fileName);
        } else {
            echo "Invalid media. " . $audioType . " format not supported.\n";
        }
    }
}

// Using the audio player to play different formats
$audioPlayer = new AudioPlayer();
$audioPlayer->play("mp3", "beyond_the_horizon.mp3");
$audioPlayer->play("mp4", "alone.mp4");
$audioPlayer->play("vlc", "far_far_away.vlc");
$audioPlayer->play("avi", "mind_me.avi");
