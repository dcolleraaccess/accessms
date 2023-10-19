<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quill Editor with HTML Form</title>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
</head>

<body>

    <form id="myForm" method="post" action="/newposttest">
        @csrf
        <div id="editor" style="height: 300px;">
            <ul>
                <li>Josephine Smith – CEO – AH International</li>
                <li>Gus Astilla – Director of Operations – AH International</li>
                <li>Asli Tabaru – Recruiter</li>
            </ul>
            If you could see yourself through the eyes of somebody else for a moment, which person would that be and
            why?<br>
            Josephine: Honestly I don’t see myself with anybody. I create my own destiny; I am who I am.<br>
            Gus: Through the eyes of my dad to know and learn if I turned out better or worse than how I see myself in
            my own eyes.<br>
            Asli: My cats. I think it would be pretty funny to see myself from their perspective. A big dumb cat who
            feeds and snuggles them. It would be entertaining.<br>
            <br>
            How do you get motivated for difficult tasks?<br>
            Josephine: I always go back to my core “why”, to the reasons why I do these things. Challenging tasks become
            bearable when you anchor them on your personal motivations.<br>
            Gus: My family gets me motivated.<br>
            Asli: I remind myself that we are humans living on a floating rock orbiting in the middle of space and
            things seem less difficult. Then I get ‘er done.<br>
            <br>
            What would you do if you had a fully paid year-long break from work?<br>
            Josephine: I have an 87-year old mother I will be spending quality time with her and continue giving
            community service.<br>
            Gus: Go on a cruise with the family to visit all 7 continents through all 5 oceans.<br>
            Asli: I would travel and sleep a lot more! I would love to visit my ancestral country, Turkey, and see
            family I’ve never met. I want to travel to learn more about different cultures and recipes.<br>
            <br>
            It is your first day on the job as an evil villain in a new comic book story. What name do you go by and
            what is the first piece of mischief you commit?<br>
            Josephine: I’d be “Jazz Danz” and every single person I’ll be passing by will be dancing and grooving
            helplessly.<br>
            Gus: Nightshade Deamonne and steal the crown jewels.<br>
            Asli: My villain name would be Susava. It’s a play on words for “war of water” in Turkish. I’m not sure what
            my first crime would be, but I would fend off my enemies using water bending abilities and having a sea
            creature army.<br>
            <br>
            Lightning round:<br>
            <br>
            Do you work in total silence or have music on? (If music is on, what are you listening to?)<br>
            Josephine: It depends upon my mood; I do both and if my music is on, I love listening to a gentle, relaxing
            kind of music – makes me more focused and productive.<br>
            Gus: Music on! Brand new Heavies.<br>
            Asli: Silence. Music is distracting for me – I’ll want to sing and dance!<br>
            <br>
            Favorite comedian?<br>
            Josephine: I can spend an entire time weekend for a Melissa McCarthy movie marathon.<br>
            Gus: Rex Navarrete!<br>
            Asli: Dave Chappelle. He’s very funny and has wonderful story telling.<br>
            <br>
            You have been given an opportunity to walk the red carpet at the Oscars in Hollywood. Who is escorting you
            and what does your outfit look like?<br>
            Josephine: Definitely it will be my son Jomar and I will be wearing a Filipiniana, a traditional Filipina
            costume that symbolizes the pride, strength and the willingness of a Filipina to fight for a freedom and
            right.<br>
            Gus: My wife in a Monique Lhullier gown and me in a Francis Libiran suit.<br>
            Asli: I am escorting myself! And my outfit would remind you of sunshine. Not sure how, just gold and
            glamorous and shiny and bright and awe striking.<br>
            <br>
            What do you want your legacy to reflect?<br>
            Josephine: I don’t know why I get emotional with this question. With my family, I want to be remembered that
            I did the best that I could. For my friends, loved ones, patients and colleagues: someone that made a
            difference in their lives for the better, kind and generous, not monetary specifically but for making them
            feel loved, sharing time, care, and being compassionate from the heart.<br>
            Gus: A legacy of trying to help Filipinos to reach their dreams.<br>
            Asli: I want to be known for kindness and generosity. Generosity doesn’t have to be monetary. You can be
            generous with time, empathy, and resources. I want to be remembered for making a positive impact on others.
        </div>
        <input type="hidden" name="content" id="contentInput">
        <button type="submit">Submit</button>
    </form>

    <script>
        var quill = new Quill('#editor', {
        theme: 'snow',
    });

    document.getElementById('myForm').onsubmit = function () {
        var content = quill.root.innerHTML;
        document.getElementById('contentInput').value = content;
        // You can also log the content or perform additional processing here
        console.log(content);
    };
    </script>

</body>

</html>