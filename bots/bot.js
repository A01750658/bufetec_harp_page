const Client = require('@notionhq/client').Client

const NOTION_KEY = "secret_neRBq1UwWy8byLamhhYVhw7m0sUHAN1g7KyiR9hJZEw"

const NOTION_CLIENT = new Client({auth : NOTION_KEY})
const DATABASE_ID = "3c9009263f8c44ebacf0778f60556e2e"

async function getData(client, databaseId){
    try{

        let results = []


        const response = await client.databases.query({
        database_id: databaseId
    })

    results = [...results, ...response.results]

    

    console.log(response)
    }
    catch(error){
        console.error(error)
    }
}



getData(NOTION_CLIENT, DATABASE_ID)