const express = require('express')
const app = express()
const PORT = process.env.PORT || 3000

app.use(express.static('public'));

app.get('/', (req, res) => res.send('Hello.BMCC\'s student ,welcome to Student Compass!'))

app.listen(PORT, () => console.log(`Server is running on port ${PORT}`))
