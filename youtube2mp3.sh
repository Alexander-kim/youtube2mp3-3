#!/bin/bash
nohup youtube-dl $1 --max-quality -x --audio-format mp3 --audio-quality 0 &
