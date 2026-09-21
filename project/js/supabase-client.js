import { createClient } from '@supabase/supabase-js'

const supabaseUrl = 'https://yzjhfcdvhmljctbfjymo.supabase.co'
const supabaseKey = 'sb_publishable_4kUq6JNLMS4IHFLwOXv9QA_S2hgDY-L'

export const supabase = createClient(supabaseUrl, supabaseKey)