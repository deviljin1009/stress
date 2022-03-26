<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script defer src="face-api.min.js"></script>
  <script defer src="script.js"></script>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Montserrat', sans-serif;
      background: #3c3d3f;
    }

    canvas {
      position: absolute;
      left: 3%;
      top:3%;
      overflow: hidden;
    }

    #video{
      position: absolute;
      left: 3%;
      top:3%;
    }

  .countdown{
  position: absolute;
  left: 5%;
  top:40%;
}

.container1{
  top:50%;
  left:50%;
  transform: translate(-50%,-50%);
  position:absolute;
  width: 800px;
  background-color: rgba(255, 255, 255, 0.856);
  height: 800px;
  padding:20px;
  border-radius: 5px;
}

.article{
  text-align: justify;
  align-items: center;
  font-weight: bold;
  width: 800px;
  height: 800px;
  text-indent: 3%;
  line-height: 20px;
  overflow-x: auto;
  padding-right: 1%;
}

.base-timer {
  position: relative;
  width: 300px;
  height: 300px;
}

.base-timer__svg {
  transform: scaleX(-1);
}

.base-timer__circle {
  fill: none;
  stroke: none;
}

.base-timer__path-elapsed {
  stroke-width: 7px;
  stroke: grey;
}

.base-timer__path-remaining {
  stroke-width: 7px;
  stroke-linecap: round;
  transform: rotate(90deg);
  transform-origin: center;
  transition: 1s linear all;
  fill-rule: nonzero;
  stroke: currentColor;
}

.base-timer__path-remaining.green {
  color: rgb(65, 184, 131);
}

.base-timer__path-remaining.orange {
  color: orange;
}

.base-timer__path-remaining.red {
  color: red;
}

.base-timer__label {
  position: absolute;
  width: 300px;
  height: 300px;
  top: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 48px;
}

::-webkit-scrollbar {
  width: 6px;
} 
::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(252, 252, 252, 0.3); 
} 
::-webkit-scrollbar-thumb {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.459); 
}
  </style>
</head>

<body>
  <video id="video" width="450" height="300" autoplay muted playsinline="true"></video>


  <div class="countdown">
    <div id="app"></div>
    </div>
    <div class="container1">
      <p class="article">
        <script>
            var myArray = [
            "When I'm anxious, I clean. With no big decisions or deadlines involved, cleaning is a relatively mindless task that always seems to lift my mood — and makes me feel better about myself and my home. It's certainly not a glamorous job (especially when there's a mucky bathroom involved), but a recent study conducted by the University of California San Diego found that household chores, including cleaning and washing up, can lower the risk of cardiovascular disease by 43% and stroke by 30%. They even claim cleaning can lower the chance of dying from heart disease by 62%. In case you were looking for another reason to pick up your cleaning gloves, the Anxiety & Depression Association of America actively recommends cleaning as a means to reduce stress. Feeling anxious? Take a look at the reasons cleaning is not my chore, but my stress reliever instead... 1. Cleaning boosts my mood-- The nature of anxiety can make everything feel overwhelming, but I find organising and tidying tasks to be true spirit-lifters. Cleaning, coupled with the end result of a tidier home, helps to reduce my stress levels and anxious thoughts, while improving my focus on a busy day. It helps me take control of my surroundings. According to a previous study, published in the journal Mindfulness, people who were mindful when washing dishes (really focusing on the task at hand) reported a 27% reduction in nervousness, along with a 25% improvement in mental inspiration. People felt more positive overall. Cleaning is physical activity with a good positive result so is a great mood booster, Lynsey Crombie, AKA Queen of Clean, tells Country Living. By adding in your favourite playlist or listening to a podcast helps too. When you see the result of a clean, tidy room or a tidier drawer it gives you the motivation to move on and do something else with your time. It helps me take control Whether it's the kitchen cabinet or bathroom sink, cleaning gives me a sense of mastery over my environment. Life is full of uncertainties — from our health to finances — but there's one thing I know to be true: I can turn all my intentions into actions when it comes to cleaning. Of course, there are some days when I don't feel like it (especially after a long week), but a quick tidy up always manages to make me feel better. 3. Ticking off the cleaning to-do list helps me feel productive-- I love to-do lists. Not only do they bring structure to my day, but they provide a clear game plan of what I need to do — especially when it comes to cleaning and organising. Once finished, there really is nothing more satisfying than marking a big tick next to each task. Surely I'm not the only one? The team at Anxiety UK back this up, telling us: At first, writing this list may seem like there is a lot to do but once step back and look at it you will see it is broken down into manageable pieces. You will also find it therapeutic to tick of each task as a sense of accomplishment can really boost your mood. Focus on how good it will feel to have that task done. When it's done take a step back and admire your hard work. Maybe that is all you need to do today. Tick it off your list! 4. Helps me to refocus-- Cleaning is certainly not loved by everyone, but having a tidy up around the home helps improve my focus and productivity. When I'm feeling sad, anxious or overwhelmed, I slip on my cleaning gloves and take a few minutes to myself. In a previous study conducted by Psychology Today, researchers found that participants who kept their houses cleaner reported better physical and mental health than those who were less tidy. Getting up in the morning to a messy kitchen is not good for you but getting up to a clean organised kitchen will put you in a great mood and in turn make your day a good day, Lynsey adds. Everyone struggles for time these days but by setting your timer to five or even 10 minutes and bashing out a room is not only great exercise because you are speed cleaning but it also a mood lifter. 5. It's simply enjoyable-- And lastly, cleaning is simply something I enjoy doing. Not only can it burn calories (mopping the floor should be classed as exercise), but previous research found cleaning increases endorphins — the feel-good chemicals in our brain. I agree. From the smell of an all-natural lemon degreaser, to the shine of a freshly wiped-down sink, it's one of life's little joys. People are embarrassed to say cleaning has helped them, but I really want to change that message. If going for a run or a walk can help, then cleaning can help too, Lynsey explains. Cleaning was my therapy, it helped me in my darkest days. Why not give it a go? It might just be to mood-boost you need to get through a challenging day.",
            "Stress is a natural feeling of not being able to cope with specific demands and events. However, stress can become a chronic condition if a person does not take steps to manage it. These demands can come from work, relationships, financial pressures, and other situations, but anything that poses a real or perceived challenge or threat to a person’s well-being can cause stress. Stress can be a motivator, and it can even be essential to survival. The body’s fight-or-flight mechanism tells a person when and how to respond to danger. However, when the body becomes triggered too easily, or there are too many stressors at one time, it can undermine a person’s mental and physical health and become harmful. Stress is the body’s natural defense against predators and danger. It causes the body to flood with hormones that prepare its systems to evade or confront danger. People commonly refer to this as the fight-or-flight mechanism. When humans face a challenge or threat, they have a partly physical response. The body activates resources that help people either stay and confront the challenge or get to safety as fast as possible. The body produces larger quantities of the chemicals cortisol, epinephrine, and norepinephrine. These trigger the following physical reactions: increased blood pressure, heightened muscle preparedness, sweating, alertness. These factors all improve a person’s ability to respond to a potentially hazardous or challenging situation. Norepinephrine and epinephrine also cause a faster heart rate. Stress slows down some normal bodily functions, such as those that the digestive and immune systems perform. The body can then concentrate its resources on breathing, blood flow, alertness, and the preparation of the muscles for sudden use. How a person reacts to a difficult situation will determine the effects of stress on overall health. Some people can experience several stressors in a row or at once without this leading a severe stress reaction. Others may have a stronger response to a single stressor. An individual who feels as though they do not have enough resources to cope will probably have a stronger reaction that could trigger health problems. Stressors affect individuals in different ways. Some experiences that people generally consider to be positive can lead to stress, such as having a baby, going on vacation, moving to a better home, and getting a promotion at work. The reason for this is that they typically involve a significant change, extra effort, new responsibilities, and a need for adaptation. They also often require a person to take steps into the unknown. A person may look forward to an increased salary following a promotion, for example, but wonder whether they can handle the extra responsibilities. A persistently negative response to challenges can have an adverse effect on health and happiness.",
            "The National Institute of Mental Health (NIMH)Trusted Source recognize two types of stress: acute and chronic. These require different levels of management. Acute stress is short-term and usually the more common form of stress. It often develops when people consider the pressures of events that have recently occurred or face upcoming challenges in the near future. For example, a person may feel stressed about a recent argument or an upcoming deadline. However, the stress will reduce or disappear once a person resolves the argument or meets the deadline. Acute stressors are often new and tend to have a clear and immediate solution. Even with the more difficult challenges that people face, there are possible ways to get out of the situation. Acute stress does not cause the same amount of damage as long-term, chronic stress. Short-term effects include tension headaches and an upset stomach, as well as a moderate amount of distress. However, repeated instances of acute stress over an extended period can become chronic and harmful. Chronic stress develops over a long period and is more harmful. Ongoing poverty, a dysfunctional family, or an unhappy marriage are examples of situations that can cause chronic stress. It occurs when a person can see no way to avoid their stressors and stops seeking solutions. A traumatic experience early in life may also contribute to chronic stress. Chronic stress makes it difficult for the body to return to a normal level of stress hormone activity, which can contribute to problems in the following systems: cardiovascular ,respiratory ,sleep ,immune ,reproductive. A constant state of stress can also increase a person’s risk of type 2 diabetes, high blood pressure, and heart disease. Depression, anxiety, and other mental health disorders, such as post-traumatic stress disorder (PTSD), can develop when stress becomes chronic. Chronic stress can continue unnoticed, as people can become used to feeling agitated and hopeless. It can become part of an individual’s personality, making them constantly prone to the effects of stress regardless of the scenarios that they encounter. People with chronic stress are at risk of having a final breakdown that can lead to suicide, violent actions, a heart attack, or stroke."
            ];
    
            var randomItem = myArray[Math.floor(Math.random()*myArray.length)];
            document.write(randomItem);
        </script>
      </p>
  
  </div>

</body>
</html>

<script src = "countdown.js"></script>